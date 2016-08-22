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

    public static function getUser($oauthData)
    {
        $account = static::where('oauth_id', $oauthData->id)->first();
        if ($account) {
            return $account->user();
        }

        $user = User::firstOrCreate(['email' => $oauthData->email]);

        $account = new static();
        $account->fillFromOAuth($oauthData);
        $account->user_id = $user->id;
        $account->save();

        return $user;
    }

}