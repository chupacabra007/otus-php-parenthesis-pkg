<?php

error_reporting(E_ALL);

try {
	 define('BASE_PATH', dirname(__DIR__));
    require BASE_PATH . '/vendor/autoload.php';
    require BASE_PATH . '/config/Bootstrap.php';    
    $app = new Bootstrap();
    $app->run();
} catch (Exception $e){
    echo $e->getMessage() . '<br/>';
    echo $e->getTraceAsString();
}