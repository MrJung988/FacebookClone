<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProfileController;

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/',[CustomAuthController::class, 'logReg'])->name('logReg')->middleware('alreadyLoggedIn');

Route::post('/',[CustomAuthController::class, 'registerUser'])->name('register-user');  

Route::post('/login', [CustomAuthController::class, 'loginUser'])->name('login-user');

// Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard')->middleware('isLoggedIn');
Route::get('/facebook', [CustomAuthController::class, 'facebook'])->name('facebook')->middleware('isLoggedIn');

Route::get('/logout', [CustomAuthController::class, 'logout']);

Route::get('/profile', [ProfileController::class, 'profile'])->middleware('isLoggedIn')->name('profile');
Route::post('/profile', [ProfileController::class, 'profileUpdate'])->middleware('isLoggedIn')->name('profileUpdate');