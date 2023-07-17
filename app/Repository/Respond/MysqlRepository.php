<?php

namespace App\Repository\Respond;

use App\Models\Poll;
use App\Models\Respond;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return Respond::all();
    }

    public function getOne(int $id): Poll
    {
        return Respond::find($id);
    }

    public function createOrUpdate(
        int $userId,
        int $questionTypeId,
        int $pollId,
        int $questionId,
        int $answerId
    ): Respond {
        $respond = Respond::query()
            ->where('user_id', $userId)
            ->where('question_type_id', $questionTypeId)
            ->where('poll_id', $pollId)
            ->where('question_id', $questionId)
            ->first();

        if (empty($respond)) {
            $respond = Respond::create([
                'user_id' => $userId,
                'question_type_id' => $questionTypeId,
                'poll_id' => $pollId,
                'question_id' => $questionId,
                'answer_id' => $answerId,
            ]);
        } else {
            $respond->answer_id = $answerId;
        }

        $respond->save();

        return $respond;
    }

    public function getQuestionsAnswersResponds(array $data): Collection
    {
        $query = Respond::query();
        $userId = Auth::user()->getAuthIdentifier();
        foreach ($data as $questionId => $answerIds) {
            foreach ($answerIds as $answerId) {
                $query->orWhere([
                    ['question_id', '=', $questionId],
                    ['answer_id', '=', $answerId],
                    ['user_id', '=', $userId]
                ]);
            }
        }

        return $query->get();
    }
}