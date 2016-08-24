<?php

namespace Iridium\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Iridium\Http\Behaviors\AuthenticatesUser;
use Iridium\Http\Controllers\Controller;
use Iridium\Models\LoginToken;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    protected $authenticatesUser;

    public function __construct(AuthenticatesUser $authenticatesUser)
    {
        $this->authenticatesUser = $authenticatesUser;
    }

    public function getIn()
    {
        $this->validate(request(), [
            'email' => 'required|email'
        ]);
        $this->authenticatesUser->invite(request('email'));
        return 'Invited';
    }

    public function getInViaToken(LoginToken $token)
    {
        $this->authenticatesUser->loginViaToken($token);
        return redirect('/');
    }

    public function getInViaSocial($provider)
    {
        if (!in_array($provider, ['vk', 'facebook'])) {
            abort(404);
        }
        return Socialite::with($provider)->redirect();
    }

    public function getInViaSocialCallback($provider)
    {
        $oauthData = Socialite::with($provider)->user();
        $this->authenticatesUser->loginViaSocial($provider, $oauthData);
        return redirect('/');
    }

    public function getOut()
    {
        auth()->logout();
        return redirect('/');
    }
}
