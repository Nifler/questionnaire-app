<?php

namespace App\Http\Controllers\Api\Subscriber\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubscriberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email|unique:subscribers,email',
        ];
    }
}
