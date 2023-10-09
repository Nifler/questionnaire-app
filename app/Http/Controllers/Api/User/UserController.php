<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Api\User\Requests\UpdateMyEmailRequest;
use App\Http\Controllers\Controller;
use App\Repository\User\RepositoryInterface as UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {
    }

    public function updateMyEmail(UpdateMyEmailRequest $request)
    {
        $user = $this->userRepository->updateById(Auth::user()->id, $request->all());

        return response([
            'result' => $user->email === $request->input('email')
        ]);
    }
}
