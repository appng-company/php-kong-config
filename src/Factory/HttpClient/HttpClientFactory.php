<?php

namespace AppNG\PhpKongConfig\Factory\HttpClient;

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
     * Create instance
     *
     * @param string $host
     * @param string $port
     *
     * @return mixed
     */
    public static function create(string $host, string $port): Client
    {
        return new Client([
            'base_uri' => $host . ':' . $port,
            'timeout' => 0,
            'allow_redirects' => false
        ]);
    }
}