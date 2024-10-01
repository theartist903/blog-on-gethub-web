<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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




Route::get('/forms-validation', function () {
    return view('backend.forms-validation');
})->name('forms-validation');

Route::get('/icons-bootstrap', function () {
    return view('backend.icons-bootstrap');
});

Route::get('/icons-boxicons', function () {
    return view('backend.icons-boxicons');
});

Route::get('/icons-remix', function () {
    return view('backend.icons-remix');
});

Route::get('/backend-index', function () {
    return view('backend.index');
})->name('backendindex');

Route::get('/pages-blank', function () {
    return view('backend.pages-blank');
});

Route::get('/pages-contact', function () {
    return view('backend.pages-contact');
});

Route::get('/pages-error-404', function () {
    return view('backend.pages-error-404');
});

Route::get('/pages-faq', function () {
    return view('backend.pages-faq');
});

Route::get('/pages-login', function () {
    return view('backend.pages-login');
});


Route::get('/charts-apexcharts', function () {
    return view('backend/charts-apexcharts');
})->name('charts.apexcharts');
Route::get('/charts-chartjs', function () {
    return view('backend/charts-chartjs');
})->name('charts.chartjs');
Route::get('/components-accordion', function () {
    return view('backend/components-accordion');
})->name('components.accordion');
Route::get('/components-alerts', function () {
    return view('backend/components-alerts');
})->name('components.alerts');
Route::get('/components-badges', function () {
    return view('backend/components-badges');
})->name('components.badges');
Route::get('/components-breadcrumbs', function () {
    return view('backend/components-breadcrumbs');
})->name('components.breadcrumbs');
Route::get('/components-buttons', function () {
    return view('backend/components-buttons');
})->name('components.buttons');
Route::get('/components-cards', function () {
    return view('backend/components-cards');
})->name('components.cards');
Route::get('/components-carousel', function () {
    return view('backend/components-carousel');
})->name('components.carousel');




Route::get('frontend-about', function () {
    return view('frontend/about');
})->name('frontend-about');




Route::get('frontend-category', function () {
    return view('frontend/category');
});

Route::get('frontend-contact', function () {
    return view('frontend/contact');
})->name('frontend-contact');

Route::get('frontend-search', function () {
    return view('frontend/search');
})->name('frontend-search');


Route::get('/base', function () {
    return view('layouts.base');
});


Route::get('frontend-single-post', function () {
    return view('frontend/single-post');
})->name('frontend-single-post');



Route::get('frontend-index', function () {
    return view('frontend/index');
});

//backend dashboard route
Route::get('/backend/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
//category routes
Route::get('/backend/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::post('/backend/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/backend/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/backend/category/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/backend/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/backend/category/status/{id}', [CategoryController::class, 'status'])->name('category.status');

//post routes
Route::get('/backend/post/index', [PostController::class, 'index'])->name('post.index');
Route::post('/backend/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('/backend/post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/backend/post/update', [PostController::class, 'update'])->name('post.update');
Route::delete('/backend/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/backend/post/status/{id}', [PostController::class, 'status'])->name('post.status');



require __DIR__ . '/ubaid.php';
