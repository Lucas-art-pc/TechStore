<?php

namespace Src\System\Controller\AdminController\ProductController;

use Src\System\Controller\Controller;
use Src\System\Model\Products;
use Src\System\Repository\ProductRepository;

class ControllerEditProd implements Controller{

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

        
        if(isset($_POST['atualiza'])){



            $product = new Products(
                $_POST['id_prod'],
                $_POST['nome_prod'],
                $_POST['desc_prod'],
                $_POST['preco_prod'],
                $_POST['categoria_prod'],
                $_POST['qtd_prod'],
                $_FILES['image_prod']['name']
                );


                    if (isset($_FILES['image_prod']) && $_FILES['image_prod']['error'] === UPLOAD_ERR_OK) {
                        $arquivoTmp = $_FILES['image_prod']['tmp_name'];
                        $nomeArquivo = basename(uniqid() . $_FILES['image_prod']['name']);
                        $destino = __DIR__ . "/../../../../public/img/" . $nomeArquivo;
                        move_uploaded_file($arquivoTmp, $destino);
                        
                    }
                
            $product->setImage($nomeArquivo);
            $this->productRepository->editaProduto($product);
            header('Location: list-product-admin');
        }else{
           $product = $this->productRepository->selecionaProduto($_GET['id_prod']);
        }
        
        require_once __DIR__ . "/../../../../Views/AdminViewers/ProductView/edit-product-admin.php";
    }
}