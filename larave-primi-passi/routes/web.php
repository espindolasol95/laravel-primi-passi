<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home"); //usando la funzione name assegno un nome alla rotta


//route per la pagina about

route::get('/about', function () {
    return view('about');
})->name("about");

//routre per la pagina CONTACTS
route::get('/contact', function () {
    return view('contact');
})->name("contact");
