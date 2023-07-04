<?php

namespace App\Repository\Question;

use App\Models\Question;
use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getAll(?array $where): Collection;

    public function getOne(int $id): Question;
}