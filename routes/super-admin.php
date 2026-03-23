<?php

use App\Http\Controllers\SuperAdmin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SuperAdmin\Auth\PasswordController;
use App\Http\Controllers\SuperAdmin\Auth\RegisteredUserController;
use App\Http\Controllers\SuperAdmin\ProfileController;
use Illuminate\Support\Facades\Route;


Route::prefix('super-admin')->name('super-admin.')->group(function () {

    Route::middleware('guest:super_admin')->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store'])
            ->name('password.store');
        Route::get('register', [RegisteredUserController::class, 'create'])
            ->name('register');
        Route::post('register', [RegisteredUserController::class, 'store'])
            ->name('password.store');
    });


    Route::middleware('auth:super_admin')->group(function () {
        Route::get('/dashboard', function () { 
            return view('super-admin.dashboard');
        })->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::put('password', [PasswordController::class, 'update'])->name('password.update');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');


        require base_path('routes/common.php'); // ✅ include

    });
   
});
 