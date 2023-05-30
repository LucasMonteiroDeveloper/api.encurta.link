<?php

namespace App\Support\Http;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

abstract class Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make thi request.
     * 
     * @return bool
     */
    public function authorized()
    {
        return true;
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {

        $errors = $validator->errors()->toArray();

        throw (new ValidationException($validator,
            response()->json($errors, 422)
        ));
    }
}
