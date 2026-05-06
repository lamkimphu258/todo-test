<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'show'])->name('landing');

Route::post('/contact', [LandingPageController::class, 'submit'])
    ->name('contact.submit')
    ->middleware('throttle:10,1');
