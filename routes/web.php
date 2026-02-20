<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});

Route::get('/data_deletion', function () {
    return view('data_deletion');
});
