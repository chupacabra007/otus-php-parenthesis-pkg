<?php

use PHPUnit\Framework\TestCase;
use chupacabra007\parenthesis\Checker;


class CheckerTest extends TestCase
{
    
    public function testBalanced()
    {
        $this->assertTrue(
            Checker::check('()')
        );       
    }
    
    public function testNotBalanced()
    {
        $this->assertFalse(
            Checker::check('(()')
        );       
    }
}