<?php

namespace AppNG\PhpKongConfig\Config\Builder;

use AppNG\PhpKongConfig\Config\Configuration;

/**
 * Created by AppNG.
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@gmail.com>
 */
interface ConfigurationBuilderInterface
{
    /**
     * Set kong configuration file location
     *
     * @param string $path
     *
     * @return ConfigurationBuilderInterface
     */
    function setConfigFilePath(string $path): ConfigurationBuilderInterface;

    /**
     * Get configuration object instance
     *
     * @return Configuration
     */
    function getConfig(): Configuration;
}