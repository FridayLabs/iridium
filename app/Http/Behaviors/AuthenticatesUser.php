<?php

namespace App\Http\Behaviors;

use App\LoginToken;
use App\User;
use Illuminate\Support\Facades\Mail;

class AuthenticatesUser
{
    public function invite($email)
    {
        $token = LoginToken::make($email);
        Mail::queue('emails.invite', ['token' => $token], function ($m) use ($email) {
            $m->to($email)->subject('Your login token');
        });
    }

    public function loginViaToken(LoginToken $token)
    {
        $user = User::firstOrCreate(['email' => $token->email]);
        auth()->login($user, true);
        $token->delete();
    }
}