<?php

use PHPUnit\Framework\TestCase;

/**
 *  Corresponding Class to test YourClass class
 *
 *  For each class in your library, there should be a corresponding Unit-Test for it
 *  Unit-Tests should be as much as possible independent from other test going on.
 *
 * @author yourname
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
