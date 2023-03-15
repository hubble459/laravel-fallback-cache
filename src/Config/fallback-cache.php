<?php

use LaravelFallbackCache\Config\Configuration;

return [
    Configuration::FALLBACK_CACHE_STORE => env('FALLBACK_CACHE_STORE', 'database')
];
