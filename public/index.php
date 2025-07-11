<?php

require __DIR__ . "/../db-conection.php";
require __DIR__ . "/../vendor/autoload.php";

use Src\System\Controller\Controller;
use Src\System\Repository\ProductRepository;
use Src\System\Repository\LoginAdminRepository;
use Src\System\Controller\AdminController\AuthController\ControllerLogin;

$routes = require_once __DIR__ . '/../Config/Routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];
$key = "$httpMethod|$pathInfo";

if (array_key_exists($key, $routes)) {
    $controllerClass = $routes[$key];

    /** @var Controller $controller */
    switch ($controllerClass) {
        case ControllerLogin::class:
            $repository = new LoginAdminRepository($pdo);
            $controller = new $controllerClass($repository);
            break;

        default:
            $repository = new ProductRepository($pdo);
            $controller = new $controllerClass($repository);
            break;
    }
} else {
    http_response_code(404);
    exit();
}

$controller->processaRequisicao();
