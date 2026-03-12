<?php

namespace App\Http\Controllers\Api\Subscriber;

use App\Http\Controllers\Api\Subscriber\Requests\StoreSubscriberRequest;
use App\Http\Controllers\Controller;
use App\Repository\Subscriber\RepositoryInterface;

class SubscriberController extends Controller
{
    private $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(StoreSubscriberRequest $request)
    {
        $subscriber = $this->repository->create(
            $request->validated('email'),
        );

        return response($subscriber);
    }
}
