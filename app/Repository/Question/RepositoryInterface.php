<?php

namespace App\Repository\Question;

use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getAll(): Collection;
}