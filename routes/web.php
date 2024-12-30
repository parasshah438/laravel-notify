<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('notify', [App\Http\Controllers\NotifyController::class, 'index'])->name('notify');
Route::post('notify', [App\Http\Controllers\NotifyController::class, 'store'])->name('store');

//contact form
Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
