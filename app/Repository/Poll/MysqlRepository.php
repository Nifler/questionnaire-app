<?php

namespace App\Repository\Poll;

use App\Models\Poll;
use Illuminate\Support\Collection;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(?array $where): Collection
    {
        dd('Poll');
        $request = Poll::query();

        if (!empty($where)) {
            array_map(function($key, $value) use (&$request) {
                $request->where($key, $value);
            }, array_keys($where), $where);
        }

        dd($request->get());
        return Poll::all();
    }

    public function getOne(int $id): Poll
    {
        return Poll::find($id);
    }
}