<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/index');
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

