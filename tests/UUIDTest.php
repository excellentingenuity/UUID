<?php

namespace eig\UUID\Tests;

use eig\UUID\Tests\TestCase;
use eig\UUID\Facades\UUID;


/**
 * Class UUID
 * @package eig\UUID\Tests
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class UUIDTest extends TestCase
{

    /**
     * testIsNotNull
     *
     * @test
     */
    public function testIsNotNull()
    {
        $this->assertNotNull(UUID::generate());
    }

    /**
     * testIsNotEmpty
     *
     * @test
     */
    public function testIsNotEmpty()
    {
        $this->assertNotEmpty(UUID::generate());
    }

    /**
     * testIsUUID
     *
     * @test
     */
    public function testIsUUID()
    {
        $this->assertUuid(UUID::generate());
    }

}
