<?php

namespace App\Units\Users\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Units\Users\Http\Requests\CreateUserRequest;
use App\Units\Users\Http\Requests\UpdateUserRequest;
use App\Domains\Users\Models\Repositories\UserRepository;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(CreateUserRequest $request, UserRepository $repository)
    {
        $data = $request->all();
        $user = $repository->create($data);

        if ($user) {
            return response()->json($user);
        }

        return response()->json('Falha', 404);
    }

    public function update($id, UpdateUserRequest $request, UserRepository $repository)
    {
        $user = $repository->find($id);
        if (!$user) {
            return response()->json('Usuário não encontrado');
        }

        $data = $request->all();
        $repository->update($user, $data);

        return response()->json($user);
    }
}
