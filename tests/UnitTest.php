<?php

use Phalcon\Di;
use PHPUnit\Framework\TestCase as TestCase;

class UnitTest extends TestCase
{
    
    public function setUp() { }
    
    public function tearDown() { }
    
    public function tearDownAfterClass() { }
    
    public function testTestCase()
    {
        $this->assertEquals(
            "works",
            "works",
            "This is OK"
        );
    }
}