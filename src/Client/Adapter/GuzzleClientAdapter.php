<?php

namespace AppNG\PhpKongConfig\Client\Adapter;

use GuzzleHttp\Client;

/**
 * Class GuzzleClientAdapter
 * @package AppNG\PhpKongConfig\Client\Adapter
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@appng.pl>
 */
class GuzzleClientAdapter implements \ClientAdapterInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * GuzzleClientAdapter constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }
}