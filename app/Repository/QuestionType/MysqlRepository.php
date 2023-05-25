<?php

namespace App\Repository\QuestionType;

use App\Models\QuestionType;
use Illuminate\Support\Collection;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return QuestionType::all();
    }
}