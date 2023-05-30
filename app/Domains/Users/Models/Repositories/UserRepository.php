<?php

namespace App\Domains\Users\Models\Repositories;

use App\Support\Domain\Repository;
use App\Domains\Users\Models\User;

class UserRepository extends Repository
{
    protected $modelClass = User::class;

    public function create(array $data = [])
    {
        $newData = $data;
        if (isset($newData['password'])) {
            $newData['password'] = bcrypt($newData['password']);
        }

        return parent::create($newData);
    }

    public function update($model, array $data = [])
    {
        $newData = $data;
        if (isset($newData['password'])) {
            $newData['password'] = bcrypt($newData['password']);
        }

        return parent::update($model, $newData);
    }
}