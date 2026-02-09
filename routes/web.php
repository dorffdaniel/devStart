<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// 'home' nome do metodo
Route::get('/', [HomeController::class, 'home']);


// 'about' nome do metodo
Route::get('/about', [AboutController::class, 'about']);


// 'content'
Route::get('/content', [ContentController::class, 'content']);
