<?php

namespace App\Http\Controllers\Api\Respond\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRespondRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'poll_id' => 'required|int|exists:polls,id',
            'question_id' => 'required|int|exists:questions,id',
            'question_type_id' => 'required|int|exists:question_types,id',
            'answer_ids' => 'required|array|exists:answers,id',
            'answer_ids.*' => 'integer|exists:answers,id'
        ];
    }
}
