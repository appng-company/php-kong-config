<?php

namespace AppNG\PhpKongConfig\Serializer;

use AppNG\PhpKongConfig\Factory\FactoryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

/**
 * Serializer instance factory
 *
 * @package AppNG\PhpKongConfig\Factory.Serializer
 *
 * @author Krzysztof Raciniewski<krzysztof.raciniewski@appng.pl>
 */
class SerializerFactory implements FactoryInterface
{
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
        $builder = SerializerBuilder::create()->setDebug($debugMode);
        if ($cacheDirectory) $builder->setCacheDir($cacheDirectory);
        if (count($metaDataDir)) $builder->setMetadataDirs($metaDataDir);
        return $builder->build();
    }
}