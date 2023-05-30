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
    public function store(CreateUserRequest $request, UserRepository $repository)
    {
        $data = $request->all();
        $user = $repository->create($data);

        if ($user) {
            return $this->respond->ok($user);
        }

        return $this->respond->error('Ocorreu um erro interno');
    }

    public function show($id, UserRepository $repository)
    {
        $user = $repository->find($id);
        if (!$user) {
            return $this->respond->notFound('Usuário não encontrado');
        }

        return $this->respond->ok($user);
    }

    public function update($id, UpdateUserRequest $request, UserRepository $repository)
    {
        $user = $repository->find($id);
        if (!$user) {
            return $this->respond->notFound('Usuário não encontrado');
        }

        $data = $request->all();
        $repository->update($user, $data);

        return $this->respond->ok($user);
    }
}
