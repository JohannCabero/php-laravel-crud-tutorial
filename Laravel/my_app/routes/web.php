<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'posts');

Route::resource('/posts', PostController::class);

Route::get('{user}/posts', [DashboardController::class, 'userPosts'])->name('posts.user');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    // Email verification notice route
    Route::get('/email/verify', [AuthController::class, 'verifyNotice'])->name('verification.notice');

    // Email verification handler
    Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmail'])->middleware('signed')->name('verification.verify');

    // Resending Verification Email
    Route::post('/email/verification/notification', [AuthController::class, 'verifyResend'])->middleware('throttle:6,1')->name('verification.send');
});

Route::middleware('guest')->group(function () {
    // Register
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register', [AuthController::class, 'register']);

    // Login
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Reset password
    Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');

    // Reset password handler
    Route::post('/forgot-password', [ResetPasswordController::class, 'passwordEmail']);

    // Reset password form
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->name('password.reset');

    Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->name('password.update');
});
