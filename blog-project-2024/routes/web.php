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

// ................................................................................

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

