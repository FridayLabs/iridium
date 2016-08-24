<?php

namespace Iridium\Models;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function fillFromOAuth($provider, $oauthData)
    {
        $this->provider = $provider;
        $this->oauth_id = $oauthData->id;
        $this->name = $oauthData->name;
        $this->nickname = $oauthData->nickname;
        $this->avatar = $oauthData->avatar;

        $this->token = $oauthData->token;
        $this->expires_in = $oauthData->expiresIn;
    }

    protected static function byOAuthId($provider, $id)
    {
        return static::where('oauth_id', $id)->where('provider', $provider)->first();
    }

    /**
     * @param $oauthData
     * @return static
     */
    public static function firstOrCreateByOAuthData($provider, $oauthData)
    {
        $account = static::byOAuthId($provider, $oauthData->id);
        if ($account) {
            return $account;
        }

        $user = User::firstOrCreate(['email' => $oauthData->email]);

        $account = new static();
        $account->fillFromOAuth($provider, $oauthData);
        $account->user_id = $user->id;
        $account->save();

        return $account;
    }

}