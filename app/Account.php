<?php


namespace Iridium;


use Illuminate\Database\Eloquent\Model;

abstract class Account extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function fillFromOAuth($oauthData)
    {
        $this->oauth_id = $oauthData->id;
        $this->name = $oauthData->name;
        $this->nickname = $oauthData->nickname;
        $this->avatar = $oauthData->avatar;

        $this->token = $oauthData->token;
    }

    protected static function byOAuthId($id)
    {
        return static::where('oauth_id', $id)->first();
    }

    public static function firstOrCreateByOAuthData($oauthData)
    {
        $account = static::byOAuthId($oauthData->id);
        if ($account) {
            return $account;
        }

        $user = User::firstOrCreate(['email' => $oauthData->email]);

        $account = new static();
        $account->fillFromOAuth($oauthData);
        $account->user_id = $user->id;
        $account->save();

        return $account;
    }

}