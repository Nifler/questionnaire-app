<?php

namespace App\Services\Poll;

use App\Models\Question;
use App\Models\User;
use App\Repository\Poll\RepositoryInterface as PollRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PollService
{
    public function __construct(private PollRepositoryInterface $pollRepository)
    {
    }

    public function getNextQuestion(int $pollId): Collection
    {
        $questions = $this->pollRepository->getOne($pollId)->questions()->get();

        foreach ($questions as $question) {
            dd($question->pivot->order);
        }

        dd('end');
    }
    public function getQuestions(?int $pollId): Collection
    {
        dd(__LINE__, __FILE__);
    }
}