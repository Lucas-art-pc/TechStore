<?php

namespace Src\System\Controller\AdminController\ProductController;

use Src\System\Controller\Controller;
use Dompdf\Dompdf;
use Src\System\Controller\SiteController\ProductsController\ControllerListProducts;
use Src\System\Repository\ProductRepository;

class ControllerPDF implements Controller{

    public function __construct(private ProductRepository $productRepository){

    }
     
    public function processaRequisicao(){
        require __DIR__ . '/../../../../vendor/autoload.php';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        ob_start();
        $lista = new ControllerListProducts($this->productRepository);
        $lista->processaPDF();
        $html = ob_get_clean();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
            }
}