<?php

namespace App\Repository\Poll;

use App\Models\Poll;
use Illuminate\Support\Collection;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return Poll::all();
    }

    public function getOne(int $id): Poll
    {
        return Poll::find($id);
    }
}