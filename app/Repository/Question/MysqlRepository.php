<?php

namespace App\Repository\Question;

use App\Models\Question;
use Illuminate\Support\Collection;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return Question::all();
    }
}