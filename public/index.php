<?php

require __DIR__ . "/../db-conection.php";
require __DIR__ . "/../vendor/autoload.php";

use Src\System\Controller\Controller;
use Src\System\Repository\ProductRepository;


$repository = new ProductRepository($pdo);
$routes = require_once __DIR__ . '/../Config/Routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$key = "$httpMethod|$pathInfo";

if(array_key_exists($key, $routes)){
    
    $controllerClass = $routes[$key];
    
    /** @var Controller $controller */
    $controller = new $controllerClass($repository);
}else{
    http_response_code(404);
    exit();
}

$controller->processaRequisicao();