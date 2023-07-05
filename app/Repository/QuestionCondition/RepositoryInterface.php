<?php

namespace App\Repository\QuestionCondition;

use App\Models\Poll;
use App\Models\QuestionCondition;
use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getAll(): Collection;
    public function getOne(int $id): QuestionCondition;
}