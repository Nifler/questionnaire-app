<?php

namespace App\Repository\CustomRespond;

use App\Models\CustomRespond;

class MysqlRepository implements RepositoryInterface
{
    public function create(int $userId, int $pollId, int $questionId, string $answer): CustomRespond
    {
        return CustomRespond::create([
            'user_id'     => $userId,
            'poll_id'     => $pollId,
            'question_id' => $questionId,
            'answer'      => $answer,
        ]);
    }
}
