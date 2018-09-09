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
    function setConfigurationFilePath(string $path): ConfigurationBuilderInterface;

    /**
     * Set kong configuration file format
     *
     * @param string $format
     *
     * @return ConfigurationBuilderInterface
     */
    function setConfigurationFileFormat(string $format): ConfigurationBuilderInterface;

    /**
     * Get configuration object instance
     *
     * @return Configuration
     */
    function getConfiguration(): Configuration;
}