<?php

namespace Src\System\Controller\AdminController\ProductController;


use Src\System\Controller\Controller;
use Src\System\Model\Products;
use Src\System\Repository\ProductRepository;


class ControllerProcessNewProd implements Controller{

    public function __construct(private ProductRepository $productRepository){

    }

    public function processaRequisicao(){

        if(isset($_POST['cadastra'])){

            $products = new Products(
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
                
                
                if (move_uploaded_file($arquivoTmp, $destino)) {
                    echo "Imagem enviada com sucesso!";
                } else {
                    echo "Erro ao mover a imagem.";
                }
            }

            $products->setImage($nomeArquivo);

            $this->productRepository->adicionaProduto($products);
    
            header('Location: list-product-admin');
        }else {
            header('Location: erro-add');
        }
    }
}