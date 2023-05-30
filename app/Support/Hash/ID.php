<?php

namespace App\Support\Hash;

use Hashids\Hashids;

class ID
{
    protected $key = 'ehfoihehr3hr80qifehrq3';
    protected $pad = 8;
    protected $hash;

    public function __construct()
    {
        $this->hash =  new Hashids($this->key, $this->pad);
    }

    public function encode($value)
    {
        return $this->hash->encode($value);
    }

    public function decode($hashed)
    {
        return array_first($this->hash->decode($hashed));
    }
}