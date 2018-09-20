<?php

namespace AppNG\PhpKongConfig;

use AppNG\PhpKongConfig\Api\KongApi;
use AppNG\PhpKongConfig\Api\KongApiInterface;
use AppNG\PhpKongConfig\Config\Configuration;

/**
 * Class Kong
 *
 * @package AppNG\PhpKongConfig
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@appng.pl>
 */
class Kong
{
    /**
     * Configuration class instance
     * @var Configuration
     */
    private $configuration;

    /**
     * @var KongApiInterface
     */
    private $api;

    /**
     * Kong constructor.
     *
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        $this->api = new KongApi($configuration);
    }

    /**
     * Load configuration file into Kong
     */
    public function powerTheGateway()
    {
        // TODO: Implement this method
    }

    /**
     * Get Kong Gateway status
     */
    public function getStatus() {
        $status = $this->api->getNodeStatus();
        return $status;
    }

}