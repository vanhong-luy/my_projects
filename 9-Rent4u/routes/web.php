<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('/rent4u/form/contact');
});
Route::get('/about', function () {
    return view('/rent4u/about');
});
Route::get('/blog', function () {
    return view('/rent4u/blog');
});
Route::get('/car', function () {
    return view('/rent4u/car');
});
Route::get('/index', function () {
    return view('/rent4u/index');
});


Route::get('/login', [LoginController::class, 'showForm']);
Route::post('/login', [LoginController::class, 'submitForm'])->name('login-form.submitForm');
Route::get('/logins', [LoginController::class, 'listLogin']);

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submitForm');
Route::get('/contacts', [ContactController::class, 'listContacts']);

