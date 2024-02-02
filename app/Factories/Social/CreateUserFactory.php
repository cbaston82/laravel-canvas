<?php

namespace App\Factories\Social;

use _HumbugBoxa23482e0566a\Swoole\Exception;
use App\Actions\Social\CreateGitHubUser;
use App\Actions\Social\CreateXUser;

class CreateUserFactory
{
    /**
     * @throws Exception
     */
    public function forService(string $service)
    {
        return match ($service) {
            'github' => new CreateGitHubUser(),
            'twitter' => new CreateXUser(),
            default => throw new Exception('Invalid service'),
        };

    }
}
