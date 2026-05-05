<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/contact', function (Request $request): RedirectResponse {
    $request->validate([
        'name' => ['required', 'string', 'max:100'],
        'email' => ['required', 'email', 'max:255'],
        'subject' => ['required', 'string', 'max:150'],
        'message' => ['required', 'string', 'max:1500'],
    ]);

    return redirect()->route('home')->with('status', 'Thanks for reaching out! We will reply soon.');
})->name('contact.store');
