<?php

namespace App\Http\Controllers\Api\Respond;

use App\Http\Controllers\Api\Respond\Requests\StoreRespondRequest;
use App\Http\Controllers\Controller;
use App\Repository\Respond\RepositoryInterface;
use Illuminate\Support\Facades\Auth;

class RespondController extends Controller
{
    private $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(StoreRespondRequest $request)
    {
        $userId = Auth::user()->getAuthIdentifier();

        $responds = [];
        foreach ($request->validated('answer_ids') as $answer_id) {
            $respond = $this->repository->createOrUpdate(
                $userId,
                $request->validated('question_type_id'),
                $request->validated('poll_id'),
                $request->validated('question_id'),
                $answer_id
            );
            $responds[] = $respond;
        }


        return response($responds);
    }
}
