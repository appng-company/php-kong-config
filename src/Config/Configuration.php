<?php

namespace AppNG\PhpKongConfig\Config;
use AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException;
use JMS\Serializer\Annotation as Serializer;

/**
 * Created by AppNG.
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@gmail.com>
 *
 * @Serializer\ExclusionPolicy('all')
 */
class Configuration
{
    /**
     * Supported configuration file formats
     */
    const CONFIGURATION_FORMAT = [
        'yaml', 'xml', 'json'
    ];

    /**
     * @var string
     */
    private $configurationFilePath;

    /**
     * @var string
     */
    private $configurationFileFormat;

    /**
     * Kong host
     *
     * @var string
     * @Serializer\SerializedName('kong-host')
     * @Serializer\Expose()
     */
    private $kongHost;

    /**
     * Kong port
     *
     * @var string
     * @Serializer\SerializedName('kong-port')
     * @Serializer\Expose()
     */
    private $kongPort;

    /**
     * @return string
     */
    public function getConfigurationFilePath(): string
    {
        return $this->configurationFilePath;
    }

    /**
     * @param string $configurationFilePath
     *
     * @return Configuration
     */
    public function setConfigurationFilePath(string $configurationFilePath): Configuration
    {
        $this->configurationFilePath = $configurationFilePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfigurationFileFormat(): string
    {
        return $this->configurationFileFormat;
    }

    /**
     * @param string $configurationFileFormat
     *
     * @return Configuration
     * @throws UnsupportedConfigurationFileFormatException
     */
    public function setConfigurationFileFormat(string $configurationFileFormat): Configuration
    {
        if(!in_array($configurationFileFormat, self::CONFIGURATION_FORMAT)) {
            throw new UnsupportedConfigurationFileFormatException($configurationFileFormat . ' is unsupported format for configuration file');
        }

        $this->configurationFileFormat = $configurationFileFormat;
        return $this;
    }

    /**
     * @return string
     */
    public function getKongHost(): string
    {
        return $this->kongHost;
    }

    /**
     * @return string
     */
    public function getKongPort(): string
    {
        return $this->kongPort;
    }

}