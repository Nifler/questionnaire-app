<?php

namespace App\Repository\Poll;

use App\Models\Poll;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return Poll::all();
    }

    public function getOne(int $id): Poll
    {
        return Poll::find($id);
    }

    public function getPollEmptyQuestions(int $pollId): Collection
    {
        return $this
            ->getOne($pollId)
            ->questions()
            ->leftJoin('responds', function (JoinClause $join) use ($pollId) {
                $join->on('responds.question_id', '=', 'questions.id')
                    ->where('responds.user_id', Auth::user()->getAuthIdentifier())
                    ->where('responds.poll_id', $pollId);
            })
            ->whereNull('responds.id')
            ->orderBy('order', 'asc')
            ->get();
    }

    public function getPollQuestions(int $pollId): Collection
    {
        return $this
            ->getOne($pollId)
            ->questions()
            ->orderBy('order', 'asc')
            ->get();
    }
}