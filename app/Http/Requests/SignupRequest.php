<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignupRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:70|regex:/^[a-z]+(\s[a-z]+)*$/i',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:10|confirmed'
        ];
    }

    public function messages()
    {
     return [
        'name.regex' => 'The name must contain only letters and spaces'
     ];
    }
}
