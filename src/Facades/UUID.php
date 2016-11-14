<?php

namespace eig\UUID\Facades;

use Ramsey\Uuid\UuidFactory;
use Ramsey\Uuid\Generator\RandomLibAdapter;
use Ramsey\Uuid\Uuid as RUUID;

/**
 * Class UUID
 * @package eig\UUID
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class UUID
{

    /**
     * generate
     * @return \Ramsey\Uuid\UuidInterface
     */
    public static function generate()
    {
        $uuidFactory = new UuidFactory();
        $uuidFactory->setRandomGenerator(new RandomLibAdapter());
        RUUID::setFactory($uuidFactory);
        $uuid = RUUID::uuid4();
        return $uuid;
    }
}