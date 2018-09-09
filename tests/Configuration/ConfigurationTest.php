<?php

use AppNG\PhpKongConfig\Config\Configuration;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigurationTest
 *
 * @author Krzysztof Raciniewski<krzysztof.raciniewski@appng.pl>
 */
class ConfigurationTest extends TestCase
{

    /**
     *  Test if creating Configuration instance doesn't cause errors or exceptions
     */
    public function testPassingConfigurationToKongClass()
    {
        $configuration = new Configuration();
        $this->assertTrue(is_object($configuration));
        unset($configuration);
    }

    /**
     *  Test setConfigurationFileFormat method - valid parameters
     */
    public function testSetConfigurationFileFormatForValidFormats()
    {
        $configuration = new Configuration();
        foreach (Configuration::CONFIGURATION_FORMAT as $format) {
            try {
                $configuration->setConfigurationFileFormat($format);
            } catch (\AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException $e) {
                $this->assertTrue(false);
            }
            $this->assertEquals($configuration->getConfigurationFileFormat(), $format);
        }
        unset($configuration);
    }


    /**
     *  Test setConfigurationFileFormat method - invalid parameters
     * @throws \AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException
     */
    public function testSetConfigurationFileFormatForInvalidFormats()
    {
        $this->expectException(\AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException::class);

        $badFormat = 'badFormat';
        $configuration = new Configuration();
        $configuration->setConfigurationFileFormat($badFormat);

        $this->assertEquals($configuration->getConfigurationFileFormat(), $badFormat);
        unset($configuration);
    }

}
