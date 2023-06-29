<?php

namespace App\Http\Controllers\Api\Respond\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRespondRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'poll_id' => 'required|int|exist:polls,id',
            'question_id' => 'required|int|exist:questions,id',
            'question_type_id' => 'required|int|exist:question_types,id',
            'answer_id' => 'required|int|exist:answers,id',
        ];
    }
}
