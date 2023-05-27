<?php

namespace App\Domains\Links;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Domains\UserModel;

class Link extends UserModel
{
    public $fillable = [
        'url',
        'slug'
    ];
}
