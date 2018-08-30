<?php

namespace AppNG\PhpKongConfig\Config;

/**
 * Created by AppNG.
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@gmail.com>
 */
class Configuration
{
    /**
     * @var string
     */
    private $configurationFilePath;

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

}