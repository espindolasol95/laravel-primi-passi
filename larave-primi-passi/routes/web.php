<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


//route per la pagina about

route::get('/about', function () {
    return view('about');
});

//routre per la pagina CONTACTS
route::get('/contact', function () {
    return view('contact');
});
