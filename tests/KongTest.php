<?php

use AppNG\PhpKongConfig\Config\Builder\ConfigurationBuilder;
use AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException;
use PHPUnit\Framework\TestCase;

/**
 * Class KongTest
 *
 * @author Krzysztof Raciniewski<krzysztof.raciniewski@appng.pl>
 */
class KongTest extends TestCase
{

    /**
     *  Test if creating Kong instance doesn't cause errors or exceptions
     * @throws UnsupportedConfigurationFileFormatException
     */
    public function testPassingConfigurationToKongClass()
    {
        $configurationBuilder = new ConfigurationBuilder();
        $configuration = $configurationBuilder
            ->setConfigurationFileFormat('json')
            ->setConfigurationFilePath(__DIR__ . '/resources/configuration.json')
            ->getConfiguration();
        $kong = new \AppNG\PhpKongConfig\Kong($configuration);
        $this->assertTrue(is_object($kong));
    }

}
