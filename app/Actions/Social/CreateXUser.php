<?php

namespace App\Actions\Social;

use App\Actions\Social\Contracts\CreateUser;
use App\Models\User;

class CreateXUser implements CreateUser
{
    public function create($user): User
    {
        return User::firstORCreate([
            'x_id' => $user->getId(),
        ],
            [
                'email' => $user->getEmail(),
                'name' => $user->getName()
            ]);
    }
}
