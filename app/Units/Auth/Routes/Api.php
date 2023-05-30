<?php

namespace App\Units\Auth\Routes;

use App\Support\Http\Routing\RouteFile;

class Api extends RouteFile
{
    public function routes()
    {
        $this->router->post('login', 'LoginController@login')->name('login');

        $this->router->post('refresh', 'LoginController@refresh')->name('refresh');
    }
}