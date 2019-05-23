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
//            'type'    => 'required',
            'ask'     => 'required|string',
            'answer'  => 'string',
            'captcha' => 'required|captcha',
        ];
    }

    public function messages()
    {
        return [
            'captcha' => '验证码 不正确',
        ];
    }
}
