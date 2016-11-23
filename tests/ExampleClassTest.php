<?php

namespace eig\UUID\Tests;

use eig\UUID\Tests\TestCase;
use eig\UUID\Tests\Fixtures\Example;

/**
 * Class ExampleClassTest
 * @package eig\UUID\Tests
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class ExampleClassTest extends TestCase
{

    /**
     * @var eig/UUID/Example
     */
    protected $exampleClass;

    /**
     * setUp
     *
     * @test
     */
    public function setUp()
    {
        parent::setUp();
        $this->exampleClass = new Example();
    }

    /**
     * testIDIsSet
     *
     * @test
     */
    public function testIDIsSet()
    {
        $this->assertNotEmpty($this->exampleClass->getID());
        $this->assertNotNull($this->exampleClass->getID());
    }

    /**
     * testIDIsUUID
     *
     * @test
     */
    public function testIDIsUUID()
    {
        $this->assertIsUuid($this->exampleClass->getID());
    }
}
