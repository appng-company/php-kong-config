<?php

namespace AppNG\PhpKongConfig\Factory;


/**
 * Interface FactoryInterface
 *
 * @package AppNG\PhpKongConfig\Factory
 *
 * @author Krzysztof Raciniewski <krzysztof.raciniewski@appng.pl>
 */
interface FactoryInterface
{
    /**
     * Create instance
     * @return mixed
     */
    public static function create();
}