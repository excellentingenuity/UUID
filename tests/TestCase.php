<?php

namespace eig\UUID\Tests;

use Apostle\PHPUnit\Constraint\String\IsUuid;
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
     * functions added because of a lack of support for PHP 7
     * by the phpunit-validation package that checks the UUID
     * if support is added in the package these functions will not
     * be necessary.
     */


    /**
     * assertUuid
     * @param        $value
     * @param bool   $strict
     * @param array  $versions
     * @param string $message
     */
    public function assertUuid($value, $strict = false, array $versions = array(1, 2, 3, 4, 5), $message = '')
    {
        self::assertThat($value, self::isUuid($strict, $versions), $message);
    }

    /**
     * isUuid
     *
     * @param bool  $strict
     * @param array $versions
     *
     * @return \Apostle\PHPUnit\Constraint\String\IsUuid
     */
    public static function isUuid($strict = false, array $versions = array(1, 2, 3, 4, 5))
    {
        return new IsUuid($strict, $versions);
    }
}
