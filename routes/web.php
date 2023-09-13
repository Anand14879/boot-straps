<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/qrcode',[QrCodeController::class, 'generateQRCode'])->name('qrcode');
Route::get('/qrcode/{eventId}', [QrCodeController::class, 'generateQRCode'])->name('qrcode');
