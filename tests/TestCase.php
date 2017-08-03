<?php

namespace eig\UUID\Tests;

use eig\UUID\Traits\IsUUID;

/**
 * Class TestCase
 * @package eig\UUID\Tests
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    use IsUUID;
}
