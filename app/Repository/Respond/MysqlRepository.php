<?php

namespace App\Repository\Respond;

use App\Models\Poll;
use App\Models\Respond;
use Illuminate\Support\Collection;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return Respond::all();
    }

    public function getOne(int $id): Poll
    {
        return Respond::find($id);
    }
}