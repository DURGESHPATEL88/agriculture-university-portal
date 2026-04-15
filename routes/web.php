<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.front-pages.index', ['pageConfigs' => $pageConfigs]);
})->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/super-admin.php';
