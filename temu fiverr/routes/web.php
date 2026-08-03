<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/join', function () {
    return view('join');
});

Route::get('/listservice', function () {
    return view('listservice');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/purchase', function () {
    return view('purchase');
});
