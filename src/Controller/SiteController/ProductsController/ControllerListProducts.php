<?php

namespace Src\System\Controller\SiteController\ProductsController;

use Src\System\Controller\Controller;
use Src\System\Repository\ProductRepository;

class ControllerListProducts implements Controller{

    public function __construct(private ProductRepository $productRepository){

    }

    public function processaRequisicao(){
        $productsList = $this->productRepository->listaProdutos();
        require __DIR__ . "/../../../../Views/SiteViewers/list-products.php";
    }

    public function processaPDF(){
        $produtos = $this->productRepository->listaProdutos();
        require_once __DIR__ . "/../../../../Views/AdminViewers/ProductView/html-pdf.php";
    }
}