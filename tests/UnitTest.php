<?php

use Phalcon\Di;
use PHPUnit\Framework\TestCase as TestCase;
use ddd\Domain\Model\Checker;


class UnitTest extends TestCase
{
    
    public function setUp() { }
    
    public function tearDown() { }
    
    public function testBalanced()
    {
        $checker = new Checker();
        
        $this->assertTrue(
            $checker->check('()')
        );       
    }
    
    public function testNotBalanced()
    {
        $checker = new Checker();
        
        $this->assertFalse(
            $checker->check('(()')
        );       
    }
}