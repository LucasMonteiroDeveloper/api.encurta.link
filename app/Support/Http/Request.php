<?php

namespace App\Support\Http;

use Illuminate\Foundation\Http\FormRequest;

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
}
