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

    /**
     * isUUID
     * 
     * checks if the supplied string is a valid uuid
     *
     * @param  string  $uuid
     *
     * @return boolean
     */
    public static function isUUID(string $uuid)
    {
        return RUUID::isValid($uuid);
    }
}
