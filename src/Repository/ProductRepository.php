<?php

namespace Src\System\Repository;
use PDO;
use Src\System\Model\Products;

class ProductRepository{

    

    public function __construct(private PDO $pdo){
        $this->pdo = $pdo;
    }

    public function listaProdutos() {
        $sqlSelect = "SELECT * FROM products;";
        $statement = $this->pdo->query($sqlSelect);
        $product = $statement->fetchAll(PDO::FETCH_ASSOC); 
        $allProducts = array_map(function($product) {
            return new Products($product['id_prod'],
                $product['nome_prod'],
            $product['desc_prod'],
            $product['preco_prod'],
            $product['categoria_prod'],
            $product['qtd_prod'],
            $product['image_prod']
            );
            }, $product
        );
        return $allProducts;
    }

    public function formarObjeto($product){
        return new Products(
            $product['id_prod'] ?? null,
            $product['nome_prod'],
            $product['desc_prod'],
            $product['preco_prod'],
            $product['categoria_prod'],
            $product['qtd_prod'],
            $_FILES['image_prod']['name']
            );
    }

    public function selecionaProduto(INT $id){
        $sqlSelect = "SELECT * FROM products WHERE id_prod = :id_prod;";
        $statement = $this->pdo->prepare($sqlSelect);
        $statement->bindValue(':id_prod', $id);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        return new Products($data['id_prod'],
                $data['nome_prod'],
            $data['desc_prod'],
            $data['preco_prod'],
            $data['categoria_prod'],
            $data['qtd_prod'],
            $data['image_prod']
            );

    }

    public function adicionaProduto(Products $product)
    {
        $sqlInsert = "INSERT INTO products (nome_prod, preco_prod, desc_prod, categoria_prod, qtd_prod, image_prod)
                    VALUES (:nome, :preco, :descricao, :categoria, :quantidade, :image_prod)";
        
        $statement = $this->pdo->prepare($sqlInsert);
        $statement->bindValue(':nome', $product->getNome());
        $statement->bindValue(':preco', $product->getPreco());
        $statement->bindValue(':descricao', $product->getDescricao());
        $statement->bindValue(':categoria', $product->getCategoria());
        $statement->bindValue(':quantidade', $product->getQuantidade());
        $statement->bindValue(':image_prod',  $product->getImagem());
        $statement->execute();
    }

    public function deletaProduto(int $id){
        $sqlDelete = "DELETE FROM products WHERE id_prod = :id_prod";
        $statement = $this->pdo->prepare($sqlDelete);
        $statement->bindValue(':id_prod', $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public function editaProduto(Products $product){
        $sqlEdit = "UPDATE products
                    SET nome_prod = :nome, preco_prod = :preco, desc_prod = :descricao, categoria_prod = :categoria, qtd_prod = :quantidade, image_prod = :image_prod
                    WHERE id_prod = :id_prod ;";
        $statement = $this->pdo->prepare($sqlEdit);
        $statement->bindValue(':nome', $product->getNome());
        $statement->bindValue(':preco', $product->getPreco());
        $statement->bindValue(':descricao', $product->getDescricao());
        $statement->bindValue(':categoria', $product->getCategoria());
        $statement->bindValue(':quantidade', $product->getQuantidade());
        $statement->bindValue(':image_prod',  $product->getImagem());
        $statement->bindValue(':id_prod',  $product->getId());
        $statement->execute();
    }
}