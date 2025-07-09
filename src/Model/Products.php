<?php

namespace Src\System\Model;
class Products{

    private ?int $idProd;
    private string $nomeProd;
    private string $descricaoProd;
    private float $precoProd;
    private string $categoriaProd;
    private int $qtdProd;
    private string $imageProd;

    public function __construct($idProd, $nomeProd, $descricaoProd, $precoProd, $categoriaProd, $qtdProd, $imageProd){
        $this->idProd = $idProd;
        $this->nomeProd = $nomeProd;
        $this->descricaoProd = $descricaoProd;
        $this->precoProd = $precoProd;
        $this->categoriaProd = $categoriaProd; 
        $this->qtdProd = $qtdProd;
        $this->imageProd = $imageProd;
    }

    public function setImage($image){
        $this->imageProd = $image;
    }

    public function getId(){
        return $this->idProd;
    }

    public function getNome(){
        return $this->nomeProd;
    }

    public function getPreco(){
        return $this->precoProd;
    }

    public function getCategoria(){
        return $this->categoriaProd;
    }


    public function getQuantidade(){
        return $this->qtdProd;
    
    }

    public function getImagem(){
        return $this->imageProd;
    }

    public function getDescricao(){
        return $this->descricaoProd;
    }


    public function getImagemFormatada(){
        return "./img/" . $this->getImagem();
    }

    public function getPrecoFormatado(){
        return "R$" . number_format($this->getPreco(),2);
    }
    
    public function getPrecoDolar(){
        
    }
}