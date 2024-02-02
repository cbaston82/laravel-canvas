<?php

namespace App\Actions\Social;

use App\Actions\Social\Contracts\CreateUser;
use App\Models\User;

class CreateGitHubUser implements CreateUser
{
    public function create($user): User
    {
        return User::firstORCreate([
            'github_id' => $user->getId(),
        ],
            [
                'email' => $user->getEmail(),
                'name' => $user->getName()
            ]);
    }
}
