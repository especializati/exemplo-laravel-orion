<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules;
use Orion\Http\Requests\Request;

class UserRequest extends Request
{
    public function commonRules() : array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                'min:3',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'min:3',
                'unique:users',
            ],
            'password' => [
                'required',
                'max:15',
                'min:6',
                Rules\Password::defaults()
            ],
        ];
    }
}
