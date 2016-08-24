<?php

namespace Iridium\Http\Behaviors;

use Illuminate\Support\Facades\Mail;
use Iridium\Mail\UserInvite;
use Iridium\Models\LoginToken;
use Iridium\Models\SocialAccount;
use Iridium\Models\User;

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

    public function loginViaSocial($provider, $oauthData)
    {
        $account = SocialAccount::firstOrCreateByOAuthData($provider, $oauthData);
        auth()->login($account->user, true);
    }
}