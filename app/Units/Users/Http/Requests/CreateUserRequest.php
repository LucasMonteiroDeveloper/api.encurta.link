<?php

namespace App\Units\Users\Http\Requests;

use App\Support\Http\Request;

class CreateUserRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required|min:3|max:255',
            'email'    => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255',
        ];
    }
}