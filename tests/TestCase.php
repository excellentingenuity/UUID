<?php

namespace eig\UUID\Tests;

/**
 * Class TestCase
 * @package eig\UUID\Tests
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
abstract class TestCase extends \PHPUnit_Framework_TestCase
{

    /**
     * The Regular Expression for a UUID
     */
    const UUID_REGEX = '/([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12})/';


    /**
     * assertUuid
     *
     * Helper Method to assert if the UUID is valid
     *
     * @param $value
     */
    public function assertIsUuid($value)
    {
        $this->assertRegExp(self::UUID_REGEX, (string) $value);
    }
}
