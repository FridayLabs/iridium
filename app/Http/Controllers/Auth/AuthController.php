<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Behaviors\AuthenticatesUser;
use App\Http\Controllers\Controller;
use App\LoginToken;

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
