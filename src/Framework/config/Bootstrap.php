<?php

use Phalcon\DI\FactoryDefault\Cli;
use Phalcon\Loader;
use Phalcon\Cli\Console;


class Bootstrap
{
	
    public function run()
    {
        $di = new Cli();        
        $this->loader($di);        
        $this->console($di);       
    }
    
    
    private function loader($di)
    {
        $loader = new Loader();
        
        $loader->registerDirs([
            '../../Application/Task/'
        ])->register();
        
        $loader->registerNamespaces([
            'ddd\Domain\Model' => '../../Domain/Model/'
        ])->register();
    }
    
    
    private function console($di)
    {
        $console = new Console($di);        
        $console->setDI($di);        
        global $argv;              
        $console->handle($argv);
    }
    
}