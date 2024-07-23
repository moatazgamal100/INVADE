<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ContactController;



    Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

