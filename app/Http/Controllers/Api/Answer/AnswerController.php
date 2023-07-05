<?php

namespace App\Http\Controllers\Api\Answer;

use App\Http\Controllers\Api\QuestionType\Requests\StoreQuestionTypeRequest;
use App\Http\Controllers\Api\QuestionType\Requests\UpdateQuestionTypeRequest;
use App\Http\Controllers\Controller;
use App\Models\QuestionType;
use App\Repository\Answer\RepositoryInterface as AnswerRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnswerController extends Controller
{

    public function __construct(
        private AnswerRepositoryInterface $answerRepository
    ) {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Response $response)
    {
        if ($request->input('questionId')) {
            $data = $this->answerRepository->getAllForQuestion($request->input('questionId'));
        } else {
            $data = $this->answerRepository->getAll();
        }

        return $response->setContent([
            'success' => true,
            'data' => $data
        ]);
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
