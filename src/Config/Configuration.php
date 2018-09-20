<?php

namespace AppNG\PhpKongConfig\Config;

use JMS\Serializer\Annotation as JMS;

/**
 * Configuration model
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@appng.pl>
 *
 * @JMS\ExclusionPolicy("all")
 */
class Configuration
{
    /**
     * Kong host
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("kong-host")
     * @JMS\Expose()
     */
    private $kongHost;

    /**
     * Kong port
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("kong-port")
     * @JMS\Expose()
     */
    private $kongPort;

    /**
     * @return string
     */
    public function getKongHost(): string
    {
        return $this->kongHost ?? 'localhost';
    }

    /**
     * @return string
     */
    public function getKongPort(): string
    {
        return $this->kongPort ?? '8001';
    }

}