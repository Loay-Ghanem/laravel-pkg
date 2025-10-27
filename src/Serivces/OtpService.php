<?php

namespace YourTeam\OtpService\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class OtpService
{
    public function generate(string $key, int $length = 6, int $ttl = 300): string
    {
        $otp = str_pad(random_int(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
        Cache::put("otp_{$key}", $otp, $ttl);
        return $otp;
    }

    public function verify(string $key, string $otp): bool
    {
        $stored = Cache::get("otp_{$key}");
        if (!$stored) return false;

        $isValid = hash_equals($stored, $otp);
        if ($isValid) {
            Cache::forget("otp_{$key}");
        }
        return $isValid;
    }

    public function resend(string $key, callable $callback): string
    {
        $otp = $this->generate($key);
        $callback($otp);
        return $otp;
    }
}
