<?php

use App\Http\Controllers\Api\LifeCheckController;
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


/** Auth */
Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::resource('/questions', \App\Http\Controllers\Api\QuestionType\QuestionController::class);

/**
 * Protected api routes
 */
Route::group(['middleware' => ['auth:sanctum']], function () {
    /** Auth */
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);

    Route::resource('/question_types', \App\Http\Controllers\Api\QuestionType\QuestionTypeController::class);
});



Route::get('/check', [LifeCheckController::class, 'check']);

