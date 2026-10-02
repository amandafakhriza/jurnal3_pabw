<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/laporan', [LaporanController::class, 'index'])
    ->name('laporan.index');

Route::get('/lapor', [LaporanController::class, 'form'])
    ->name('laporan.form');

Route::post('/lapor', [LaporanController::class, 'kirim'])
    ->name('laporan.kirim');