<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeGeneratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dynamic-qr-code-generator');
});

Route::get('/sign-in', function () {
    return view('sign-in-page');
});

Route::get('/sign-up', function () {
    return view('sign-up-page');
});

Route::resource('qrcodes', 'App\Http\Controllers\QRCodeController');

Route::get('/dynamic-qr-code-generator', [QrCodeGeneratorController::class, 'index']);
