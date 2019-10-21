<?php

namespace SocialiteProviders\Tjad;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TjadExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('tjad', __NAMESPACE__.'\Provider');
    }
}
