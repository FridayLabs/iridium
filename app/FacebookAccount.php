<?php

namespace Iridium;

class FacebookAccount extends Account
{
    public function fillFromOAuth($oauthData)
    {
        parent::fillFromOAuth($oauthData);
        $this->expires_in = $oauthData->expiresIn;
    }
}
