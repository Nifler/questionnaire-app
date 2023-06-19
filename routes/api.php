<?php

use App\Http\Controllers\LifeCheckController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);

/**
 * Protected api routes
 */
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('/question_type', \App\Http\Controllers\QuestionType\QuestionTypeController::class);
});



Route::get('/check', [LifeCheckController::class, 'check']);

