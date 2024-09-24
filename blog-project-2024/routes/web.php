<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/index');
});
Route::get('components_list_group', function () {
    return view('backend/components-list-group');
});

Route::get('components_modal', function () {
    return view('backend/components-modal');
});

Route::get('components_pagination', function () {
    return view('backend/components-pagination');
});

Route::get('components_progress', function () {
    return view('backend/components-progress');
});

Route::get('components_spinners', function () {
    return view('backend/components-spinners');
});

Route::get('components_tabs', function () {
    return view('backend/components-tabs');
});

Route::get('components_tooltips', function () {
    return view('backend/components-tooltips');
});

Route::get('forms_editors', function () {
    return view('backend/forms-editors');
});

Route::get('forms_elements', function () {
    return view('backend/forms-elements');
});


Route::get('forms_layouts', function () {
    return view('backend/forms-layouts');
});
