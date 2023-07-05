<?php

namespace App\Repository\QuestionCondition;

use App\Models\Poll;
use App\Models\QuestionCondition;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return QuestionCondition::all();
    }

    public function getOne(int $id): QuestionCondition
    {
        return QuestionCondition::find($id);
    }

    public function getPollMessageCondition(int $pollId, int $messageId): QuestionCondition
    {
        $condition = QuestionCondition::query()
            ->where('poll_id', $pollId)
            ->where('question_id', $messageId)
            ->where('active', true)
            ->first();

        if (is_null($condition)) {
            throw new ModelNotFoundException();
        }

        return $condition;
    }
}