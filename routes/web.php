<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
    //return 'about page';
    //return ['foo' => 'bar'];
});

Route::get('/contacts', function () {
    return view('contact');
});
