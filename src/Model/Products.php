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
        return "R$" . number_format($this->getPreco(),2,',','.');
    }
    
    public function getPrecoDolar(){
        /*$dateInicial = date("m-d-Y", strtotime("-7 days"));
        $dateFinal = date("m-d-Y");

        $urlAPI = $urlAPI = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/" .
          "CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?" .
          "@dataInicial='" . urlencode($dateInicial) . "'&" .
          "@dataFinalCotacao='" . urlencode($dateFinal) . "'" .
          "&" . urlencode('$top=1&$orderby=dataHoraCotacao desc&$format=json&$select=cotacaoVenda,dataHoraCotacao');


        
        
        $data = json_decode(file_get_contents($urlAPI), true);
        $valuePrice = $data['value'][0]['cotacaoCompra'];

        $value = number_format($valuePrice, 2);*/
        return '$' . number_format($this->precoProd / 5.60, 2);
        
    }
}