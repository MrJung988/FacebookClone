<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StoryController;

// Route::get('/',[CustomAuthController::class, 'logReg'])->name('logReg');

Route::get('/', [CustomAuthController::class, 'check'])->name('authCheck');

Route::post('/registerUser', [CustomAuthController::class, 'registerUser'])->middleware('guest')->name('register-user');

Route::post('/loginUser', [CustomAuthController::class, 'loginUser'])->middleware('guest')->name('login-user');

Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgotPassword');
Route::post('/forgot-password/search', [ForgotPasswordController::class, 'searchId'])->name('searchId');
Route::get('/otp-send', [ForgotPasswordController::class, 'otpSend'])->name('otpSend');
Route::get('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('resetPassword');
Route::post('/reset-password', [ForgotPasswordController::class, 'otpSendToEmail'])->name('otpSendToEmail');

Route::get('/logout', [CustomAuthController::class, 'logout'])->middleware('isLoggedIn');

Route::get('/profile', [ProfileController::class, 'profile'])->middleware('isLoggedIn')->name('profile');
Route::post('/profile', [ProfileController::class, 'profileUpdate'])->middleware('isLoggedIn')->name('profileUpdate');

Route::post('/profile/cover', [CoverController::class, 'coverPicUpdate'])->middleware('isLoggedIn')->name('coverPicUpdate');


Route::post('/postStore', [PostController::class, 'store'])->name('postStore');

Route::post('/storyStore', [StoryController::class, 'storeStory'])->name('storyStore');

Route::get('/like', [LikeController::class, 'likePost'])->name('likePost');
