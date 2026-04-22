<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/', [ProfilController::class, 'index']);
Route::get('/', [KontakController::class, 'index']);
