<?php

namespace Src\System\Controller\SiteController\ProductsController;

use Src\System\Controller\Controller;
use Src\System\Repository\ProductRepository;

class ControllerProductPage implements Controller{

    public function __construct(private ProductRepository $productRepository){

    }

    public function processaRequisicao(){
        $id_prod = $_GET['id_prod'];
        $product = $this->productRepository->selecionaProduto($id_prod);
        require_once __DIR__ . "/../../../../Views/SiteViewers/product.php";
    }
}