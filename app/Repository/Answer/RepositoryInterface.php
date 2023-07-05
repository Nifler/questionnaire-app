<?php

namespace App\Repository\Answer;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getAll(): Collection;

    public function getOne(int $id): Answer;
}