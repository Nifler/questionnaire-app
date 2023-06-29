<?php

namespace App\Repository\Poll;

use App\Models\Poll;
use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getAll(): Collection;
    public function getOne(int $id): Poll;
}