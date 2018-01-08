<?php

use Phalcon\Di;
use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;

include __DIR__ . '/../src/Framework/vendor/autoload.php';

$loader = new Loader();
        
$loader->registerNamespaces([
    'ddd\Domain\Model' => __DIR__ . '/../src/Domain/Model/'
])->register();