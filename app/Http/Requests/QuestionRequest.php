<?php

namespace App\Http\Requests;


class QuestionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type'    => 'required',
            'ask'     => 'required|string',
            'answer'  => 'required|string',
            'captcha' => 'required|string',
        ];
    }
}
