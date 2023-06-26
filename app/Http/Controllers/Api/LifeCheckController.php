<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserTypes;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LifeCheckController extends Controller
{
    public function check(Request $request, Response $response): Response
    {
        $dbCheck = UserTypes::find(1)->title === 'admin';

        if (!$dbCheck) {
            $response->setStatusCode(420);
        }
        $body = [
            'database' => $dbCheck
        ];
        $response->setContent($body);

        return $response;
    }
}
