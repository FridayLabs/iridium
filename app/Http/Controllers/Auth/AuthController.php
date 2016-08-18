<?php

namespace Iridium\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Iridium\Http\Behaviors\AuthenticatesUser;
use Iridium\Http\Controllers\Controller;
use Iridium\LoginToken;

class AuthController extends Controller
{
    public function getIn(Request $request, AuthenticatesUser $authenticatesUser)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);
        $authenticatesUser->invite($request->get('email'));
        return 'Invited';
    }

    public function getInViaToken(LoginToken $token, AuthenticatesUser $authenticatesUser)
    {
        $authenticatesUser->loginViaToken($token);
        return redirect('/');
    }

    public function sociallyGetIn($provider)
    {

    }

    public function getOut()
    {
        auth()->logout();
        return redirect('/');
    }
}
