<?php

error_reporting(E_ALL);

try {
	 define('BASE_PATH', dirname(dirname(__DIR__)));
    require BASE_PATH . '/src/Framework/vendor/autoload.php';
    require BASE_PATH . '/src/Framework/config/Bootstrap.php';    
    $app = new Bootstrap();
    $app->run();
} catch (Exception $e){
    echo $e->getMessage() . '<br/>';
    echo $e->getTraceAsString();
}