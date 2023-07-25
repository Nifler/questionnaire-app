<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request): Response
    {
        $fields = $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|string'
        ]);

        /**
         * @var User $user
         */
        $user = User::create([
            'name'      => $fields['name'],
            'email'     => $fields['email'],
            'password'  => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myAppToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request): Response
    {
        $fields = $request->validate([
            'email'     => 'required|email|exists:users,email',
            'password'  => 'required|string'
        ]);

        /**
         * @var User $user
         */
        $user = User::where('email', $fields['email'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response(
                ['message' => 'Wrong email or password'],
                401
            );
        }

        $token = $user->createToken('myAppToken')->plainTextToken;
        Auth::login($user, true);
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(): Response
    {
        auth()->user()->tokens()->delete();

        return response(['message' => 'All tokens is removed.'], 201);
    }

}
