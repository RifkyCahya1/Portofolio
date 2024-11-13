<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('About', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('Portofolio', [App\Http\Controllers\HomeController::class, 'portofolio']);

Route::get('U17', [App\Http\Controllers\PortoController::class, 'U17']);
Route::get('Istopila', [App\Http\Controllers\PortoController::class, 'Istopila']);
Route::get('GoTrans', [App\Http\Controllers\PortoController::class, 'GoTrans']);
Route::get('Portfolio', [App\Http\Controllers\PortoController::class, 'Portfolio']);
Route::get('Dicoding-1', [App\Http\Controllers\PortoController::class, 'Dicoding']);