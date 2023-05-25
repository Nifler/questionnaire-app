<?php

namespace App\Repository\QuestionType;

use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getAll(): Collection;
}