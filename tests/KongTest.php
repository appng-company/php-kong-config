<?php

use AppNG\PhpKongConfig\Config\Builder\ConfigurationBuilder;
use AppNG\PhpKongConfig\Config\Exception\UnsupportedConfigurationFileFormatException;
use AppNG\PhpKongConfig\Kong;
use GuzzleHttp\Exception\ConnectException;
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
     * @throws \AppNG\PhpKongConfig\Config\Exception\ConfigurationFileDeserializationException
     */
    public function testPassingConfigurationToKongClass()
    {
        $configurationBuilder = new ConfigurationBuilder();
        $configuration = $configurationBuilder
            ->setConfigurationFileFormat('json')
            ->setConfigurationFilePath(__DIR__ . '/resources/configuration.json')
            ->getConfiguration();
        $kong = new Kong($configuration);
        $this->assertTrue(is_object($kong));
    }

    /**
     *  Test if creating Kong instance doesn't cause errors or exceptions
     * @throws UnsupportedConfigurationFileFormatException
     * @throws \AppNG\PhpKongConfig\Config\Exception\ConfigurationFileDeserializationException
     */
    public function testPowerTheGatewayMethod()
    {
        $configurationBuilder = new ConfigurationBuilder();
        $configuration = $configurationBuilder
            ->setConfigurationFileFormat('json')
            ->setConfigurationFilePath(__DIR__ . '/resources/configuration.json')
            ->getConfiguration();
        $kong = new Kong($configuration);
        $this->assertTrue(is_object($kong));

        $kong->powerTheGateway();
    }

    /**
     * @throws UnsupportedConfigurationFileFormatException
     * @throws \AppNG\PhpKongConfig\Config\Exception\ConfigurationFileDeserializationException
     */
    function testGetStatusMethod()
    {
        $this->expectException(ConnectException::class);

        $configurationBuilder = new ConfigurationBuilder();
        $configuration = $configurationBuilder
            ->setConfigurationFileFormat('json')
            ->setConfigurationFilePath(__DIR__ . '/resources/configuration.json')
            ->getConfiguration();
        $kong = new Kong($configuration);
        $status = $kong->getStatus();

        $this->assertInstanceOf(\AppNG\PhpKongConfig\Api\Model\NodeStatusModel::class, $status);

        $this->assertTrue(is_string($status->getHostname()));
        $this->assertTrue(is_string($status->getLuaVersion()));
        $this->assertTrue(is_string($status->getLuaVersion()));
        $this->assertTrue(is_string($status->getNodeId()));
        $this->assertTrue(is_string($status->getTagline()));
        $this->assertTrue(is_string($status->getVersion()));
        $this->assertTrue(is_array($status->getPrngSeeds()));
        $this->assertTrue(is_array($status->getTimers()));
        $this->assertInstanceOf(\AppNG\PhpKongConfig\Api\Model\NodeConfigurationModel::class, $status->getConfiguration());
        $this->assertInstanceOf(\AppNG\PhpKongConfig\Api\Model\NodePluginsModel::class, $status->getPlugins());
        $this->assertTrue(is_array($status->getPlugins()->getAvailableOnServer()));
        $this->assertTrue(is_array($status->getPlugins()->getEnabledInCluster()));



    }

}
