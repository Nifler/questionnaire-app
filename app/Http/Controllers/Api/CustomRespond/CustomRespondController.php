<?php

namespace App\Http\Controllers\Api\CustomRespond;

use App\Http\Controllers\Api\CustomRespond\Requests\StoreCustomRespondRequest;
use App\Http\Controllers\Controller;
use App\Repository\CustomRespond\RepositoryInterface;
use Illuminate\Support\Facades\Auth;

class CustomRespondController extends Controller
{
    private $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(StoreCustomRespondRequest $request)
    {
        $userId = Auth::user()->getAuthIdentifier();

        $respond = $this->repository->create(
            $userId,
            $request->validated('poll_id'),
            $request->validated('question_id'),
            $request->validated('answer'),
        );

        return response($respond);
    }
}
