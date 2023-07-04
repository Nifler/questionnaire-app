<?php

namespace App\Repository\Question;

use App\Models\Question;
use Illuminate\Support\Collection;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(?array $where): Collection
    {
        $request = Question::query();

        if (!empty($where)) {
            array_map(function($key, $value) use (&$request) {
                $request->where($key, $value);
            }, array_keys($where), $where);
        }
dd(123);
        dd($request->get());
    }

    public function getOne(int $id): Question
    {
        return Question::find($id);
    }
}