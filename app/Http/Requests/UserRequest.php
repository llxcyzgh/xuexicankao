<?php

namespace App\Http\Requests;


class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|alpha_dash|between:6,20|confirmed',
        ];
    }
}
