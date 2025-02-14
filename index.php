<?php

session_start();
define("ROOT", dirname(__FILE__));

spl_autoload_register(function ($class_name) {
    $dirs = [
        '/components/',
        '/modules/',
        '/controllers/'
    ];

    foreach ($dirs as $dir){
        $path = ROOT . $dir .$class_name . '.php';
        if(is_file($path)){
            include_once $path;
        };
    }
});


$router = new Router();
$router->run();