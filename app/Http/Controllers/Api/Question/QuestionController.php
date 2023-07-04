<?php

namespace App\Http\Controllers\Api\Question;

use App\Http\Controllers\Api\QuestionType\Requests\StoreQuestionTypeRequest;
use App\Http\Controllers\Api\QuestionType\Requests\UpdateQuestionTypeRequest;
use App\Http\Controllers\Controller;
use App\Models\QuestionType;
use App\Repository\Question\RepositoryInterface;
use App\Services\Poll\PollService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    public function __construct(
        private PollService $pollService
    ) {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Response $response)
    {
        if ($request->input('next') && $request->input('pollId')) {
            return $response->setContent(
                $this->pollService->getNextQuestion($request->input('pollId'))
            );
        }

        return $response->setContent($this->pollService->getQuestions($request->input('pollId')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Controllers\Api\QuestionType\Requests\StoreQuestionTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionType $questionType, Response $response)
    {
        return $response->setContent($questionType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Controllers\Api\QuestionType\Requests\UpdateQuestionTypeRequest  $request
     * @param  \App\Models\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionTypeRequest $request, QuestionType $questionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionType $questionType)
    {
        throw new \Exception('you can not remove question type');
    }
}
