<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingSearch;
use App\Http\Controllers\CarController;


Route::get('/index', [CarController::class, 'index']);

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/car', function () {
    return view('pages.car');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/booking/search', [BookingSearch::class, 'search'])
    ->name('booking.search');
