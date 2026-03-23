<?php

use Illuminate\Support\Facades\Route;

// ✅ Common Home Route
Route::get('/home', function () {
    dd('Common Home Page (User + Admin)');
    return "Common Home Page (User + Admin)";
})->name('home');

// ✅ Example aur bhi routes add kar sakte ho
Route::get('/about', function () {
    return "About Page";
})->name('about');
