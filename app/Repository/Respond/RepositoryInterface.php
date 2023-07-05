<?php

namespace App\Repository\Respond;

use App\Models\Poll;
use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getAll(): Collection;
    public function getOne(int $id): Poll;

    public function getQuestionsAnswersResponds(array $data): Collection;
}