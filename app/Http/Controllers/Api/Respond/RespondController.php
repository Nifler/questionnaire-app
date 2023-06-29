<?php

namespace App\Http\Controllers\Api\Respond;

use App\Http\Controllers\Api\Respond\Requests\StoreRespondRequest;
use App\Http\Controllers\Controller;
use App\Repository\Respond\RepositoryInterface;

class RespondController extends Controller
{
    private $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(StoreRespondRequest $request)
    {
        dd('end');
    }
}
