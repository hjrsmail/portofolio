<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

route::get ('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/portofolio', function () {
    return view('portofolio', ['title' => 'Portofolio']);
});
