<?php

namespace App\Units\Links\Routes;
use App\Support\Http\Routing\RouteFile;

class Api extends RouteFile
{
    public function routes()
    {
        $this->router->get('/links', 'LinkController@index')
        ->middleware('auth');
        $this->router->post('/links', 'LinkController@store');
        $this->router->get('/links/{link}', 'LinkController@show');
    }
}