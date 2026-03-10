<?php

namespace App\Http\Controllers\Api\Poll;

use App\Http\Controllers\Api\Poll\Requests\StorePollRequest;
use App\Http\Controllers\Api\Poll\Requests\UpdatePollRequest;
use App\Http\Controllers\Controller;
use App\Models\Poll;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PollController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return $response->setContent([
            'success' => true,
            'data' => Poll::all(),
        ]);
    }

    public function store(StorePollRequest $request, Response $response)
    {
        //
    }

    public function show(Poll $poll, Response $response)
    {
        return $response->setContent([
            'success' => true,
            'data' => $poll,
        ]);
    }

    public function update(UpdatePollRequest $request, Poll $poll, Response $response)
    {
        //
    }

    public function destroy(Poll $poll, Response $response)
    {
        //
    }
}
