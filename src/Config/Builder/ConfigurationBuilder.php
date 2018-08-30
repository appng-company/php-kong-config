<?php

namespace AppNG\PhpKongConfig\Config\Builder;

use AppNG\PhpKongConfig\Config\Configuration;

/**
 * Created by AppNG.
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@gmail.com>
 *
 * Configuration builder implementation
 */
class ConfigurationBuilder implements ConfigurationBuilderInterface
{

    /**
     * Set kong configuration file location
     *
     * @param string $path
     *
     * @return ConfigurationBuilderInterface
     */
    function setConfigFilePath(string $path): ConfigurationBuilderInterface
    {
        // TODO: Implement setConfigFilePath() method.
    }

    /**
     * Get configuration object instance
     *
     * @return Configuration
     */
    function getConfig(): Configuration
    {
        // TODO: Implement getConfig() method.
    }
}