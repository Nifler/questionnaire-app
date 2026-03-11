<?php

namespace App\Http\Controllers\Api\Poll;

use App\Exceptions\NoModelException;
use App\Http\Controllers\Controller;
use App\Services\Poll\PollService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QuestionsController extends Controller
{

    public function __construct(private PollService $pollService){}
    public function index(Request $request, int $pollId, Response $response)
    {
        return $response->setContent([
            'success' => true,
            'data' => [],
        ]);
    }

    public function nextQuestion(Request $request, int $pollId, Response $response)
    {
        $data = [$this->pollService->getNextQuestion($pollId)];

        return $response->setContent([
            'success' => true,
            'data' => $data
        ]);
    }
}
