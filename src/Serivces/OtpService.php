<?php

namespace YourTeam\OtpService\Services;

class OtpService
{
    public function generate(): string
    {
        return "1234";
    }

    public function verify(): bool
    {
        return true;
    }

    public function resend(string $key, callable $callback): string
    {
        return "1234";
    }
}
