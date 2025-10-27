<?php

namespace YourTeam\OtpService;

use Illuminate\Support\ServiceProvider;
use YourTeam\OtpService\Services\OtpService;

class OtpServiceProvider extends ServiceProvider
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
