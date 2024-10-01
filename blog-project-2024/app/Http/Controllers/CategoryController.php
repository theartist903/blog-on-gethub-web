<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class CategoryController extends Controller
{
    public function index() {
        $category = new Category();
        $allCategories = Category::orderBy('category_name')->get();
        return view('backend.category.index', compact('category', 'allCategories'));
    }

    public function store(Request $request) {
        $data = $this->validateCategory();


          // Generate the slug from the category name
         $data['category_slug'] = Str::slug($request->category_name);

        try {
            DB::beginTransaction();
            Category::create($data);
            DB::commit();

        } catch(QueryException $ex) {
            DB::rollBack();
            dd($ex);
        }
        return redirect(route('category.index'))->with('success', 'Category has been added successfully!');
    }

    public function edit(Category $category) {
        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request) {
        $data = $this->validateCategory();

        // Generate the slug from the category name
        $data['category_slug'] = Str::slug($request->category_name);

        try {
            DB::beginTransaction();
            Category::find($request->hidden_id)->update($data);
            DB::commit();
        } catch(QueryException $ex) {
            DB::rollBack();
            dd($ex);
        }
        return redirect(route('category.index'))->with('success', 'category added successfully');
    }

    public function destroy($id) {
        try {
            DB::beginTransaction();
            // Find the category by ID and delete it
            $category = Category::findOrFail($id);
            $category->delete();

            DB::commit();
            return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
        } catch (QueryException $ex) {
            DB::rollBack();
            return redirect()->route('category.index')->with('error', 'Error deleting category.');
        }
    }

    public function status($id) {
        try {
                    DB::beginTransaction();

                    // Find the category by ID
                    $category = Category::findOrFail($id);

                    // Toggle the status
                    $category->status = $category->status == 1 ? 0 : 1;

                    // Save the updated status
                    $category->save();

                    DB::commit();

                    // Return a JSON response for AJAX
                    return response()->json([
                        'status' => $category->status,
                        'message' => 'Category status updated successfully.'
                    ]);
                } catch (QueryException $ex) {
                    DB::rollBack();
                    return response()->json([
                        'error' => 'Error updating category status.'
                    ], 500);
                }
    }


    private function validateCategory() {
        return request()->validate([
            'category_name' => ['required', 'min:3', 'max:50', Rule::unique('categories')->ignore(request()->hidden_id)]
        ]);
    }
}
