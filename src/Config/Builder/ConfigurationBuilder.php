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
     * @var Configuration
     */
    private $configuration;

    /**
     * ConfigurationBuilder constructor
     */
    public function __construct()
    {
        $this->configuration = new Configuration();
    }

    /**
     * Set kong configuration file location
     *
     * @param string $path
     *
     * @return ConfigurationBuilderInterface
     */
    function setConfigurationFilePath(string $path): ConfigurationBuilderInterface
    {
        $this->configuration->setConfigurationFilePath($path);
        return $this;
    }

    /**
     * Set kong configuration file format
     *
     * @param string $format
     *
     * @return ConfigurationBuilderInterface
     */
    function setConfigurationFileFormat(string $format): ConfigurationBuilderInterface
    {
        return $this;
    }

    /**
     * Get configuration object instance
     *
     * @return Configuration
     */
    function getConfiguration(): Configuration
    {
        return $this->configuration;
    }
}