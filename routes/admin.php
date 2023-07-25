<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index']);
Route::get('/poll/{id}', [\App\Http\Controllers\Admin\PollController::class, 'show']);