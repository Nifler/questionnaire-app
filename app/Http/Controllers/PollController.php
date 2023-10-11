<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\User;
use App\Repository\Poll\RepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class PollController extends BaseController
{
    /**
     * @var RepositoryInterface
     */
    private $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function show(Request $request, $id)
    {
        $poll = $this->repository->getOne($id);

        if (!Auth::check()) {
            $user = User::create([
                'name'      => 'respondent'
            ]);

            Auth::login($user, true);
        }

        $data = [
            'user_id' => Auth::user()->getAuthIdentifier(),
            'poll' => $poll,
        ];

        return view('questionnaire.main', $data);
    }

    public function finished(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('/poll/' . $id);
        }

        $poll = $this->repository->getOne($id);
        $needEmail = empty(Auth::user()->email);
//        dd($needEmail);
        $data = [
            'user_id' => Auth::user()->getAuthIdentifier(),
            'poll' => $poll,
            'need_email' => $needEmail
        ];

        return view('questionnaire.finished', $data);
    }
}
