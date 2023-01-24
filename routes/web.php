<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeGeneratorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/login' , [LoginController::class, 'login'])->name('login');

Route::get('/register' , [RegisterController::class, 'register']);
Route::post('/register-user' , [RegisterController::class, 'register_user'])->name('register-user');



Route::get('/', function () {
    return view('dynamic-qr-code-generator');
});

Route::resource('qrcodes', 'App\Http\Controllers\QRCodeController');

Route::get('/dynamic-qr-code-generator', [QrCodeGeneratorController::class, 'index']);
