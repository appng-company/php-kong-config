<?php

use AppNG\PhpKongConfig\Config\Builder\ConfigurationBuilder;
use AppNG\PhpKongConfig\Config\Configuration;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigurationBuilderTest
 *
 * @author Krzysztof Raciniewski<krzysztof.raciniewski@appng.pl>
 */
class ConfigurationBuilderTest extends TestCase
{

    /**
     * Just check if the ConfigurationBuilder class has no syntax error
     *
     * This is just a simple check to make sure library has no syntax error. This helps you troubleshoot
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
     * @throws \AppNG\PhpKongConfig\Config\Exception\ConfigurationFileDeserializationException
     * @throws \AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException
     */
    public function testGetconfigMethod()
    {
        $path = __DIR__ . '/../resources/configuration.json';
        $configBuilder = new ConfigurationBuilder();
        $configBuilder->setConfigurationFilePath($path)
            ->setConfigurationFileFormat('json');

        $configuration = $configBuilder->getConfiguration();

        $this->assertEquals($configuration->getKongHost(), 'localhost');
        $this->assertEquals($configuration->getKongPort(), '8001');

        $this->assertInstanceOf(Configuration::class, $configuration);
        unset($configBuilder);
        unset($configuration);
    }

    /**
     * @throws \AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException
     */
    public function testUnsupportedConfigurationFileFormatException()
    {
        $this->expectException(\AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException::class);

        $path = __DIR__ . '/../resources/configuration.json';
        $configBuilder = new ConfigurationBuilder();
        $configBuilder->setConfigurationFilePath($path)
            ->setConfigurationFileFormat('badFormat');

        unset($configBuilder);
        unset($configuration);
    }

    /**
     * @throws \AppNG\PhpKongConfig\Config\Exception\ConfigurationFileDeserializationException
     * @throws \AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException
     */
    public function testConfigurationFileDeserializationException()
    {
        $this->expectException(\AppNG\PhpKongConfig\Config\Exception\ConfigurationFileDeserializationException::class);

        $path = __DIR__ . '/../resources/configuration.yml';
        $configBuilder = new ConfigurationBuilder();
        $configBuilder->setConfigurationFilePath($path)
            ->setConfigurationFileFormat('json');

        $configuration = $configBuilder->getConfiguration();

        unset($configBuilder);
        unset($configuration);
    }

}
