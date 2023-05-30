<?php

namespace App\Support\Hash;

use Illuminate\Support\ServiceProvider;

class IdServiceProvider extends ServiceProvider
{
    public function register()
    {
        new 
        $this->app->singleton('hash_id', function() {
            return new ID();
        });

        require_once __DIR__.'/functions.php';
    }
}