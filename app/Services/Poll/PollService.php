<?php

namespace App\Services\Poll;

use App\Models\Question;
use App\Models\User;
use App\Repository\Poll\RepositoryInterface as PollRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class PollService
{
    public function __construct(private PollRepositoryInterface $pollRepository)
    {
    }

    public function getNextQuestion(int $pollId): Collection
    {
        $userId = Auth::user()->getAuthIdentifier();

        $questions = $this->pollRepository->getPollEmptyQuestions($pollId);


        dd(12321);
$a='';
        foreach ($questions as $question) {
            $a .= ($question->pivot->order) . ' ';
        }

        dd($a);
    }

    private function checkQuestionCondition()
    {

    }
    public function getQuestions(?int $pollId): Collection
    {
        dd(__LINE__, __FILE__);
    }
}