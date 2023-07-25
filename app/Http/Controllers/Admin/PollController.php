<?php

namespace App\Http\Controllers\Admin;

use App\Models\Poll;
use App\Repository\Poll\RepositoryInterface as PollRepositoryInterface;
use Illuminate\Routing\Controller as BaseController;

class PollController extends BaseController
{
    public function show(Poll $poll)
    {
        dd($poll);
        return view('admin.home', $data);
    }
}
