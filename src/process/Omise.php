<?php

namespace code\Omise\process;

use Illuminate\Support\Facades\Http;

class Omise
{
    static protected $url;
    static protected $public_key;
    static protected $secret_key;

    protected static function init()
    {
        self::$url = config('omise.url');
        self::$public_key = config('omise.public_key');
        self::$secret_key = config('omise.secret_key');
    }
}
