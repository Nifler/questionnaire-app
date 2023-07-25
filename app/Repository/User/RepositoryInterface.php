<?php

namespace App\Repository\User;

use App\Models\User;
use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getAll(): Collection;
    public function getOne(int $id): User;
}