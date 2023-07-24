<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PollController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::get('/poll/{id}/finished', [PollController::class, 'finished']);

Route::get('/poll/{id}', [PollController::class, 'show']);

Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);