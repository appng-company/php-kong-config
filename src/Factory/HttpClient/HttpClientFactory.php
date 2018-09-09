<?php

namespace AppNG\PhpKongConfig\Factory\HttpClient;

use AppNG\PhpKongConfig\Factory\FactoryInterface;
use GuzzleHttp\Client;

/**
 * Http client factory
 *
 * @package AppNG\PhpKongConfig\HttpClient
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@appng.pl>
 */
class HttpClientFactory implements FactoryInterface
{
    /**
     * Create instance
     * @return mixed
     */
    public static function create(): Client
    {
        return new Client();
    }
}