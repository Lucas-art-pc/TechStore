<?php

namespace Src\System\Controller\AdminController\ProductController;

use Src\System\Controller\Controller;
use Src\System\Repository\ProductRepository;

class ControllerNewProduct implements Controller{

    public function __construct(private ProductRepository $productRepository){

    }

    public function processaRequisicao(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (!isset($_SESSION['id_admin'])) {
            header('Location: /login-admin');
            exit;
        }
        require_once __DIR__ . "/../../../../Views/AdminViewers/ProductView/add-product-admin.php";
    }
}