<?php

namespace LaravelFallbackCache\Config;

use Illuminate\Support\Facades\Config;

class Configuration
{
    public const CACHE_DRIVER_ARRAY = 'array';

    public const CONFIG = 'fallback-cache';

    public const FALLBACK_CACHE_STORE = 'fallback_cache_store';

    /**
     * @return string
     */
    public static function getFallbackCacheStore(): string
    {
        return Config::get(self::CONFIG)[self::FALLBACK_CACHE_STORE] ?? self::CACHE_DRIVER_ARRAY;
    }
}
