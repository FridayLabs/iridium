<?php

namespace Iridium\Providers\OAuth;

use SocialiteProviders\Manager\SocialiteWasCalled;

class VKSocialiteExtend
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'vk', VKProvider::class
        );
    }
}