<?php

namespace YourTeam\OtpService\Facades;

use Illuminate\Support\Facades\Facade;

class Otp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'otp';
    }
}
