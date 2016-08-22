<?php

namespace Iridium\Http\Behaviors;

use Iridium\LoginToken;
use Iridium\Mail\UserInvite;
use Iridium\User;
use Illuminate\Support\Facades\Mail;

class AuthenticatesUser
{
    public function invite($email)
    {
        $token = LoginToken::make($email);
        Mail::to($email)->queue(new UserInvite($token));
    }

    public function loginViaToken(LoginToken $token)
    {
        $user = User::firstOrCreate(['email' => $token->email]);
        auth()->login($user, true);
        $token->delete();
    }

    public function loginViaSocial($provider, $socialiteUser)
    {
        $accountClass = '\Iridium\\' . ucfirst($provider) . 'Account';
        $user = $accountClass::getUser($socialiteUser);

        auth()->login($user, true);
    }
}