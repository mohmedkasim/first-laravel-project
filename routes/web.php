<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello world',
        'name' => 'My name is Mohamed',
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/meet-team', function() {
    return view('team');
});
