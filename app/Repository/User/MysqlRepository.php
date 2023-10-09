<?php

namespace App\Repository\User;

use App\Models\Poll;
use App\Models\Respond;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class MysqlRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return User::all();
    }

    public function getOne(int $id): User
    {
        return User::find($id);
    }

    public function updateById(int $id, array $params): User
    {
        $user = $this->getOne($id);
        $user->update($params);

        return $user;
    }
}