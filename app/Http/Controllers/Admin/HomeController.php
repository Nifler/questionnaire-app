<?php

namespace App\Http\Controllers\Admin;

use App\Repository\Poll\RepositoryInterface as PollRepositoryInterface;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index(PollRepositoryInterface $pollRepository)
    {
        $polls = $pollRepository->getAll();

        $data = [
            'polls' => $polls
        ];

        return view('admin.home', $data);
    }
}
