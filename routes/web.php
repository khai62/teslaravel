<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "khairuddin"
    ]);
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/daftar', function () {
    return view('daftar');
});

