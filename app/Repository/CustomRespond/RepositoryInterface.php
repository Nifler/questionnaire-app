<?php

namespace App\Repository\CustomRespond;

use App\Models\CustomRespond;

interface RepositoryInterface
{
    public function create(int $userId, int $pollId, int $questionId, string $answer): CustomRespond;
}
