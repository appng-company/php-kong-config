<?php

namespace AppNG\PhpKongConfig\Factory\Serializer;

use AppNG\PhpKongConfig\Factory\FactoryInterface;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

/**
 * Serializer instance factory
 *
 * @package AppNG\PhpKongConfig\Factory.Serializer
 *
 * @author Krzysztof Raciniewski<krzysztof.raciniewski@appng.pl>
 */
class SerializerFactory
{

    /**
     * @var Serializer
     */
    private static $serializerInstance;

    /**
     * Create JMS Factory.Serializer instance
     *
     * @param bool $debugMode
     * @param array $metaDataDir
     * @param null|string $cacheDirectory
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function create(bool $debugMode = false, array $metaDataDir = [], ?string $cacheDirectory = null): Serializer
    {
        if(!self::$serializerInstance) {
            AnnotationRegistry::registerLoader('class_exists');

            $builder = SerializerBuilder::create()->setDebug($debugMode);
            if ($cacheDirectory) $builder->setCacheDir($cacheDirectory);
            if (count($metaDataDir)) $builder->setMetadataDirs($metaDataDir);
            self::$serializerInstance = $builder->build();
        }

        return self::$serializerInstance;
    }
}