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

/**
 * Protected api routes
 */
Route::group(['middleware' => ['auth:sanctum']], function () {
    /** Auth */
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);

    Route::resource('/polls', \App\Http\Controllers\Api\Poll\PollController::class);
    Route::get('/polls/{pollId}/questions', [\App\Http\Controllers\Api\Poll\QuestionsController::class, 'index']);
    Route::get('/polls/{pollId}/questions/next', [\App\Http\Controllers\Api\Poll\QuestionsController::class, 'nextQuestion']);
    Route::resource('/question_types', \App\Http\Controllers\Api\QuestionType\QuestionTypeController::class);
    Route::resource('/questions', \App\Http\Controllers\Api\Question\QuestionController::class);
    Route::resource('/answers', \App\Http\Controllers\Api\Answer\AnswerController::class);
    Route::post('/responds', [\App\Http\Controllers\Api\Respond\RespondController::class, 'store']);
    Route::post('/custom_responds', [\App\Http\Controllers\Api\CustomRespond\CustomRespondController::class, 'store']);
    Route::put('/user', [\App\Http\Controllers\Api\User\UserController::class, 'update']);
});

Route::get('/check', [LifeCheckController::class, 'check']);