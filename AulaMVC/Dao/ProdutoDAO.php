<?php

class ProdutoDAO {
    private $connection = null;
    
    public function __construct(){
        $this->connection = ConnectionDB::getInstance();
    }
    
    public function insertProduto($produto){
        try{
            
            $status = $this->connection->prepare("INSERT INTO produto (id, descricao, codigo, marca)"
                                                . " values (null,?,?,?)");
            
            $status->bindValue(1, $produto->descricao);
            $status->bindValue(2, $produto->codigo);
            $status->bindValue(3, $produto->marca);
         
            
            $status->execute();
            
            $this->connection = null;
            
        } catch (Exception $ex) {
            print_r($ex->getMessage());
            echo "Ocorreram erros ao inserir novo Produto!";
            exit;
        }
    }
}
