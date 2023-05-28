<?php

namespace App\Units\Users\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Units\Users\Http\Requests\CreateUserRequest;
use App\Domains\Users\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(CreateUserRequest $request)
    {
        return $request->all();
    }
}
