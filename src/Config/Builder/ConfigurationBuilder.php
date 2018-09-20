<?php

namespace AppNG\PhpKongConfig\Config\Builder;

use AppNG\PhpKongConfig\Config\Configuration;
use AppNG\PhpKongConfig\Config\Exception\ConfigurationFileDeserializationException;
use AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException;
use AppNG\PhpKongConfig\Factory\Serializer\SerializerFactory;

/**
 * Created by AppNG.
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@appng.pl>
 *
 * Configuration builder implementation
 */
class ConfigurationBuilder implements ConfigurationBuilderInterface
{
    /**
     * Supported configuration file formats
     */
    const CONFIGURATION_FORMAT = [
        'xml', 'json'
    ];

    /**
     * @var \JMS\Serializer\Serializer
     */
    private $serializer;

    /**
     * @var Configuration
     */
    private $configuration;

    /**
     * @var string
     */
    private $configurationFilePath;

    /**
     * @var string
     */
    private $configurationFileFormat;

    /**
     * ConfigurationBuilder constructor.
     */
    public function __construct()
    {
        $this->serializer = SerializerFactory::create();
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
        $this->configurationFilePath = $path;
        return $this;
    }

    /**
     * Set kong configuration file format
     *
     * @param string $format
     *
     * @return ConfigurationBuilderInterface
     * @throws \AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException
     */
    function setConfigurationFileFormat(string $format): ConfigurationBuilderInterface
    {
        if (!in_array($format, self::CONFIGURATION_FORMAT)) {
            throw new UnsupportedConfigurationFileFormatException($format . ' is unsupported format for configuration file');
        }

        $this->configurationFileFormat = $format;
        return $this;
    }

    /**
     * Get configuration object instance
     *
     * @return Configuration
     * @throws \AppNG\PhpKongConfig\Config\Exception\ConfigurationFileDeserializationException
     */
    function getConfiguration(): Configuration
    {
        $configFileContent = file_get_contents($this->configurationFilePath);
        try {
            $this->configuration = $this->serializer->deserialize($configFileContent, Configuration::class, $this->configurationFileFormat);
        } catch (\RuntimeException|\Exception $e) {
            throw new ConfigurationFileDeserializationException($this->configurationFileFormat . ' is unsupported', 0, $e);
        }
        return $this->configuration;
    }
}