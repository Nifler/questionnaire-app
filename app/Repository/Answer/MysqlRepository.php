<?php

namespace App\Repository\Answer;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Collection;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return Answer::all();
    }

    public function getOne(int $id): Answer
    {
        return Answer::find($id);
    }
}