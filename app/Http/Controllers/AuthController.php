<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends BaseController
{
    public function login()
    {
        $data = [
            'userId' => Auth::user() ? Auth::user()->getAuthIdentifier() : 0
        ];

        return view('login', $data);
    }

    public function logout(Request $request)
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('home');
    }
}
