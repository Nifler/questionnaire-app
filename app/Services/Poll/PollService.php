<?php

namespace App\Services\Poll;

use App\Models\Question;
use App\Repository\Poll\RepositoryInterface as PollRepositoryInterface;
use App\Repository\QuestionCondition\RepositoryInterface as QuestionConditionRepositoryInterface;
use App\Repository\Respond\RepositoryInterface as RespondRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;

class PollService
{
    public function __construct(
        private PollRepositoryInterface $pollRepository,
        private QuestionConditionRepositoryInterface $conditionRepository,
        private RespondRepositoryInterface $respondRepository
    ) {
    }

    public function getQuestions(int $pollId): Collection
    {
        return $this->pollRepository->getPollQuestions($pollId);
    }

    public function getNextQuestion(int $pollId): Question
    {
        $questions = $this->pollRepository->getPollEmptyQuestions($pollId);

        foreach ($questions as $question) {

            if ($this->checkQuestionCondition($question->id, $pollId)) {
                return $question;
            }
        }

        throw new \Exception('no more questions');
    }

    private function checkQuestionCondition(int $questionId, int $pollId): bool
    {
        try {
            $condition = $this->conditionRepository->getPollMessageCondition($pollId,$questionId);
        } catch (ModelNotFoundException $e) {
            return true;
        }

        $conditions = json_decode($condition->condition);

        $result = true;

        if (!empty($conditions->required)) {
            $result = $this->checkRequiredCondition((array) $conditions->required);
        }

        if (!empty($conditions->prohibited)) {
            $result = $result && $this->checkProhibitedCondition((array) $conditions->prohibited);
        }

        if (!empty($conditions->sufficient)) {
            $result = $result && $this->checkSufficientCondition((array) $conditions->sufficient);
        }

        return $result;
    }

    private function checkRequiredCondition(array $rules): bool
    {
        $answers = $this->respondRepository->getQuestionsAnswersResponds($rules);

        return $answers->count() === count($rules);
    }

    private function checkProhibitedCondition(array $rules): bool
    {
        $answers = $this->respondRepository->getQuestionsAnswersResponds($rules);

        return (bool) $answers->count();
    }

    private function checkSufficientCondition(array $rules): bool
    {
        $answers = $this->respondRepository->getQuestionsAnswersResponds($rules);

        return !$answers->count();
    }
}