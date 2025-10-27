<?php

namespace OtpService;

use OtpService\Services\OtpService;

class OtpServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('otp', function () {
            return new OtpService();
        });
    }

    public function boot(): void
    {
        //
    }
}
