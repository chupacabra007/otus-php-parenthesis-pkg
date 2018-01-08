<?php

use Phalcon\Di;
use PHPUnit\Framework\TestCase as TestCase;

class UnitTest extends TestCase
{
    
    public function __construct()
    {
        
    }

    public function __destruct()
    {
        
    }
    
    public function testTestCase()
    {
        $this->assertEquals(
            "works",
            "works",
            "This is OK"
        );
    }
}