<?php

namespace App\Http\Controllers\Social;

use _HumbugBoxa23482e0566a\Swoole\Exception;
use App\Factories\Social\CreateUserFactory;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class AuthCallbackController extends Controller
{
    /**
     * @throws Exception
     */
    public function __invoke(string $service)
    {
        auth()->login(
            $user = app(CreateUserFactory::class)
                ->forService($service)
                ->create(Socialite::driver($service)->user())
        );

        if ($user->wasRecentlyCreated) {

            \Log::info('register user');
            event(new Registered($user));
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
