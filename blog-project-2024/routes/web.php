<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/index');
});
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======

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

// ===================================================================
=======
>>>>>>> Stashed changes

Route::get('frontend-about', function () {
    return view('frontend/about');
});
<<<<<<< Updated upstream


Route::get('frontend-category', function () {
    return view('frontend/category');
});

Route::get('frontend-contact', function () {
    return view('frontend/contact');
});

Route::get('frontend-search', function () {
    return view('frontend/search');
});


Route::get('frontend-single-post', function () {
    return view('frontend/single-post');
});



Route::get('frontend-index', function () {
    return view('frontend/index');
});

>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
