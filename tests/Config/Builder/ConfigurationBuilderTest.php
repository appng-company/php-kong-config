<?php

use AppNG\PhpKongConfig\Config\Builder\ConfigurationBuilder;
use AppNG\PhpKongConfig\Config\Configuration;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigurationBuilderTest
 */
class ConfigurationBuilderTest extends TestCase
{

    /**
     * Just check if the ConfigurationBuilder class has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError()
    {
        $configBuilder = new ConfigurationBuilder();
        $this->assertTrue(is_object($configBuilder));
        unset($configBuilder);
    }

    /**
     * Check if getConfiguration method return valid result
     */
    public function testGetconfigMethod()
    {
        $configBuilder = new ConfigurationBuilder();
        $configuration = $configBuilder->getConfiguration();
        $this->assertInstanceOf(Configuration::class, $configuration);
        unset($configBuilder);
        unset($configuration);
    }

    /**
     * Check if setConfigurationFile method work properly
     */
    public function testSetConfigFilePathMethod()
    {
        $configBuilder = new ConfigurationBuilder();
        $path = '/this/is/example/path';
        $configBuilder->setConfigurationFilePath($path);
        $configuration = $configBuilder->getConfiguration();
        $this->assertEquals($path, $configuration->getConfigurationFilePath());
        unset($configBuilder);
        unset($configuration);
    }

}
