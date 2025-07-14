<?php

use Src\System\Controller\AdminController\AuthController\ControllerLogin;
use Src\System\Controller\SiteController\ClientContoller\ControllerSendSolicit;
use Src\System\Controller\AdminController\ProductController\ControllerDeleteProd;
use Src\System\Controller\AdminController\ProductController\ControllerErroCad;
use Src\System\Controller\SiteController\ProductsController\ControllerListProducts;
use Src\System\Controller\SiteController\ProductsController\ControllerProductPage;
use Src\System\Controller\AdminController\ProductController\ControllerListProductsAdmin;
use Src\System\Controller\AdminController\ProductController\ControllerNewProduct;
use Src\System\Controller\AdminController\ProductController\ControllerProcessNewProd;
use Src\System\Controller\AdminController\ProductController\ControllerPDF;
use Src\System\Controller\AdminController\ProductController\ControllerEditProd;
use Src\System\Controller\SiteController\ProductsController\ControllerHomePage;

return [
    'GET|/' => ControllerHomePage::class,
    'GET|/list-products' => ControllerListProducts::class,
    'GET|/product' => ControllerProductPage::class,
    'GET|/list-product-admin'=> ControllerListProductsAdmin::class,
    'POST|/list-product-admin'=> ControllerListProductsAdmin::class,
    'GET|/cadaster-product' => ControllerNewProduct::class,
    'POST|/add-product' => ControllerProcessNewProd::class,
    'GET|/delete-product' => ControllerDeleteProd::class,
    'GET|/erro-add' => ControllerErroCad::class,
    'POST|/gera-pdf' => ControllerPDF::class,
    'GET|/edit-product' => ControllerEditProd::class,
    'POST|/edit-product' => ControllerEditProd::class,
    'GET|/login-admin' => ControllerLogin::class,
    'POST|/login-admin' => ControllerLogin::class,
    'GET|/send-solicit' => ControllerSendSolicit::class
];