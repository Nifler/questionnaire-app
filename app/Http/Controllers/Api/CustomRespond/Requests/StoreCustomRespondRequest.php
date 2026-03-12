<?php

namespace App\Http\Controllers\Api\CustomRespond\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCustomRespondRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::check();
    }

    public function rules()
    {
        return [
            'poll_id'     => 'required|int|exists:polls,id',
            'question_id' => 'required|int|exists:questions,id',
            'answer'      => 'required|string',
        ];
    }
}
