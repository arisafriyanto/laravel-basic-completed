<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
        // validation: request = username dan db = user_name === unique:users,user_name

        return [
            'email' => ['required', 'unique:users', 'email'],
            'name' => ['required', 'string', 'min:3'],
            'username' => ['required', 'string', 'unique:users,username', 'min:3', 'max:25', 'alpha_num'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
}
