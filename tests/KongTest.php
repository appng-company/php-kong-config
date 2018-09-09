<?php

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
     */
    public function testPassingConfigurationToKongClass()
    {
        $configuration = (new \AppNG\PhpKongConfig\Config\Builder\ConfigurationBuilder())->getConfiguration();
        $kong = new \AppNG\PhpKongConfig\Kong($configuration);
        $this->assertTrue(is_object($kong));
    }

}
