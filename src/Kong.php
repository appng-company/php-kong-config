<?php

namespace AppNG\PhpKongConfig;
use AppNG\PhpKongConfig\Config\Configuration;

/**
 *  Kong class
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
     * Kong constructor.
     *
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

}