<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    use HasFactory;

    public function publicId()
    {
        return encode_id($this->id);
    }
}
