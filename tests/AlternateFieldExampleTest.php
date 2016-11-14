<?php

namespace eig\UUID\Tests;

use eig\UUID\Tests\TestCase;
use eig\UUID\AlternateFieldExample;

/**
 * Class AlternateFieldExampleTest
 * @package eig\UUID\Tests
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class AlternateFieldExampleTest extends TestCase
{

    /**
     * @var
     */
    protected $alternateExample;

    /**
     * setUp
     */
    public function setUp ()
    {
        parent::setUp();
        $this->alternateExample = new AlternateFieldExample();
    }

    /**
     * testIDIsSet
     *
     * @test
     */
    public function testIDIsSet()
    {
        $this->assertNotEmpty($this->alternateExample->getAlternateID());
        $this->assertNotNull($this->alternateExample->getAlternateID());
    }

    /**
     * testIDIsUUID
     *
     * @test
     */
    public function testIDIsUUID()
    {
        $this->assertUuid($this->alternateExample->getAlternateID());
    }
}
