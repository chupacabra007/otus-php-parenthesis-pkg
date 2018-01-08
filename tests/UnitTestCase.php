<?php

use Phalcon\Di;
use Phalcon\Test\UnitTestCase as PhalconTestCase;


abstract class UnitTestCase extends PhalconTestCase
{
    private $_loaded = false;
    

    public function setUp()
    {
        parent::setUp();

        $di = Di::getDefault();

        $this->setDi($di);

        $this->_loaded = true;
    }

    
    public function __destruct()
    {
        if (!$this->_loaded) {
            throw new \PHPUnit_Framework_IncompleteTestError(
                'Please run parent::setUp().'
            );
        }
    }
}