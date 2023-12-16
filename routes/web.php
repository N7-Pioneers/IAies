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

Route::get('/',[QrCodeController::class,'showQrCode'])->name("QrCode");

  

// Route::get('/qr-code/{data}', 'QrCodeController@showAlertForm')->name('qr-code');
// Route::post('/submit-alert', 'QrCodeController@submitAlert')->name('submit-alert');

Route::get('/generate-and-redirect', [QrCodeController::class, 'generateAndRedirect']);


Route::get('/player-data',[QrCodeController::class,'showPlayerData'])->name('player-data');
Route::post('/submit',[QrCodeController::class,'toDB'])->name("submit");


