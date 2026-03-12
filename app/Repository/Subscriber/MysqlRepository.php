<?php

namespace App\Repository\Subscriber;

use App\Models\Subscriber;

class MysqlRepository implements RepositoryInterface
{
    public function create(string $email): Subscriber
    {
        return Subscriber::create([
            'email' => $email,
        ]);
    }
}
