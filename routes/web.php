<?php

use App\Http\Controllers\CvDownloadController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/lang/{locale}', [LocaleController::class, 'switch'])
    ->where('locale', 'es|ca|en')
    ->name('locale.switch');

Route::get('/cv/download', CvDownloadController::class)
    ->name('cv.download');
