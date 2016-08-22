<?php

namespace Iridium\Http\Behaviors;

use Illuminate\Support\Facades\Mail;
use Iridium\LoginToken;
use Iridium\Mail\UserInvite;
use Iridium\Account;
use Iridium\User;

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
        /**
         * @var $account Account
         */
        $accountClass = '\Iridium\\' . ucfirst($provider) . 'Account';
        $account = $accountClass::firstOrCreateByOAuthData($oauthData);
        auth()->login($account->user(), true);
    }
}