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
class HttpClientFactory
{

    /**
     * @var Client
     */
    public static $clientInstance;

    /**
     * Create instance
     *
     * @param string $host
     * @param string $port
     *
     * @return mixed
     */
    public static function create(string $host, string $port): Client
    {
        if (!self::$clientInstance) {
            return new Client([
                'base_uri' => $host . ':' . $port,
                'timeout' => 0,
                'allow_redirects' => false
            ]);
        }

        return self::$clientInstance;
    }
}