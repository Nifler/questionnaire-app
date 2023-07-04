<?php

namespace App\Repository\Poll;

use App\Models\Poll;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(?array $where): Collection
    {
        dd('Poll');
        $request = Poll::query();

        if (!empty($where)) {
            array_map(function($key, $value) use (&$request) {
                $request->where($key, $value);
            }, array_keys($where), $where);
        }

        dd($request->get());
        return Poll::all();
    }

    public function getOne(int $id): Poll
    {
        return Poll::find($id);
    }

    public function getPollEmptyQuestions(int $pollId)
    {
        $questions = $this
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

        dd($questions);
    }
}