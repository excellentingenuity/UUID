<?php

namespace eig\UUID\Facades;

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
        $uuid = RUUID::uuid4();
        return $uuid;
    }

    public static function isUUID($uuid)
    {
        return RUUID::isValid($uuid);
    }
}
