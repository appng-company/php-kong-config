<?php

use AppNG\PhpKongConfig\Factory\FactoryInterface;
use AppNG\PhpKongConfig\Factory\HttpClient\HttpClientFactory;
use AppNG\PhpKongConfig\Factory\Serializer\SerializerFactory;
use JMS\Serializer\Serializer;
use PHPUnit\Framework\TestCase;

/**
 * Class SerializerFactoryTest
 *
 * @author Krzysztof Raciniewski<krzysztof.raciniewski@appng.pl>
 */
class SerializerFactoryTest extends TestCase
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
        $serializerFactory = new SerializerFactory();
        $this->assertTrue(is_object($serializerFactory));
        unset($serializerFactory);
    }

    /**
     * Test create method
     */
    public function testCreateMethod()
    {
        $serializer = SerializerFactory::create();
        $this->assertInstanceOf(Serializer::class, $serializer);
        unset($serializer);
    }
}