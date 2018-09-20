<?php

use AppNG\PhpKongConfig\Factory\FactoryInterface;
use AppNG\PhpKongConfig\Factory\HttpClient\HttpClientFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigurationBuilderTest
 *
 * @author Krzysztof Raciniewski<krzysztof.raciniewski@appng.pl>
 */
class HttpClientFactoryTest extends TestCase
{

    /**
     * Just check if the HttpClientFactory class has no syntax error
     *
     * This is just a simple check to make sure library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError()
    {
        $httpClientFactory = new HttpClientFactory();
        $this->assertTrue(is_object($httpClientFactory));
        unset($httpClientFactory);
    }

    /**
     * Test create method
     */
    public function testCreateMethod()
    {
        $client = HttpClientFactory::create('localhost', '8001');
        $this->assertInstanceOf(\GuzzleHttp\Client::class, $client);
        unset($client);
    }
}