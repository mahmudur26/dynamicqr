<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeGeneratorController;
use App\Http\Controllers\QrCodeShowingController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/test' , [Controller::class, 'test']);

Route::get('/admin-home' , [AdminController::class , 'home']);

Route::get('/' , [LoginController::class, 'login'])->name('login')->middleware('isAlreadyLogged');
Route::get('/login' , [LoginController::class, 'login'])->name('login')->middleware('isAlreadyLogged');
Route::post('/login-user' , [LoginController::class, 'login_user'])->name('login-user');

Route::get('/register' , [RegisterController::class, 'register'])->name('register')->middleware('isAlreadyLogged');
Route::post('/register-user' , [RegisterController::class, 'register_user'])->name('register-user');

Route::get('/logout' , [LoginController::class, 'logout'])->name('logout');


Route::resource('qrcodes', 'App\Http\Controllers\QRCodeController');

Route::get('/dynamic-qr-generator', [QrCodeGeneratorController::class, 'index'])->name('dynamic-qr-generator')->middleware('isLogged');

Route::get('/qr-code', [QrCodeShowingController::class, 'index'])->name('qr-code')->middleware('isLogged');
