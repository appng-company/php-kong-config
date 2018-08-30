<?php

use AppNG\PhpKongConfig\Client\Adapter\GuzzleClientAdapter;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigurationBuilderTest
 */
class GuzzleClientAdapterTest extends TestCase
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
        $clientAdapter = new GuzzleClientAdapter();
        $this->assertTrue(is_object($clientAdapter));
        unset($clientAdapter);
    }

}
