<?php

namespace App\Repository\Respond;

use App\Models\Poll;
use App\Models\Respond;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        array $answerIds
    ): array {

        $attributes = [
            'user_id' => $userId,
            'question_type_id' => $questionTypeId,
            'poll_id' => $pollId,
            'question_id' => $questionId,
        ];
        $createdResponds = DB::transaction(function () use ($attributes, $answerIds) {
            Respond::query()
                ->where($attributes)
                ->delete();

            if (empty($answerIds)) {
                return collect();
            }

            $now = now();

            $createData = [];
            foreach ($answerIds as $answerId) {
                $createData[] = [
                    ...$attributes,
                    'answer_id' => $answerId,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }

            Respond::query()->insert($createData);

            return Respond::query()
                ->where($attributes)
                ->whereIn('answer_id', $answerIds)
                ->get();
        });

        return $createdResponds->toArray();
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