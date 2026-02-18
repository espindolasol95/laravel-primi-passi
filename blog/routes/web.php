<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get("/seconda", function () {
    return view("partials.seconda");
})->name("seconda");
