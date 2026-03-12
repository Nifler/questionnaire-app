<?php

namespace App\Repository\Subscriber;

use App\Models\Subscriber;

interface RepositoryInterface
{
    public function create(string $email): Subscriber;
}
