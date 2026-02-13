<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController;

Route::get('/', [SolicitudController::class, 'index'])->name('formulario');
Route::post('/solicitud', [SolicitudController::class, 'store'])->name('solicitud.store');
