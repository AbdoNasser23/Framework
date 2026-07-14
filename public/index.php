<?php


require __DIR__ . '/../vendor/autoload.php';

use Illuminates\Router\Router;

$router = new Router();

$router->addRoute('GET','/','',function(){
    echo "Hello,World!";
},[]);


$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


// echo "<pre>";

// var_dump($router->getRoutes());
