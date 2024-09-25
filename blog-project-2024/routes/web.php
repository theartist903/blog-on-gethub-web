<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/forms-validation', function () {
    return view('backend.forms-validation');
});

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
