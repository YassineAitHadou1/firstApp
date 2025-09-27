<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'requestMethod']);
Route::get('/profile',[profileController::class,'index']);
Route::get('/settings',[SettingsController::class,'index']);
