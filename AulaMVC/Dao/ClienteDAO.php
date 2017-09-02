<?php

class ClienteDAO {
    private $connection = null;
    
    public function __construct(){
        $this->connection = ConnectionDB::getInstance();
    }
    
    public function insertCliente($cliente){
        try{
            
            $status = $this->connection->prepare("INSERT INTO cliente (id, nome, sobrenome, nascimento, cpf, genero, profissao,"
                                                . " telefone, email, cep, endereco, numero, complemento, bairro, cidade, estado, observacao)"
                                                . " values (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            
            $status->bindValue(1, $cliente->nome);
            $status->bindValue(2, $cliente->sobrenome);
            $status->bindValue(3, DateTime::createFromFormat('d/m/Y', $cliente->dtNascimento)->format('Y-m-d'));
            $status->bindValue(4, $cliente->cpf);
            $status->bindValue(5, $cliente->sexo);
            $status->bindValue(6, $cliente->profissao);
            $status->bindValue(7, $cliente->telefone);
            $status->bindValue(8, $cliente->email);
            $status->bindValue(9, $cliente->cep);
            $status->bindValue(10, $cliente->endereco);
            $status->bindValue(11, $cliente->numero);
            $status->bindValue(12, $cliente->complemento);
            $status->bindValue(13, $cliente->bairro);
            $status->bindValue(14, $cliente->cidade);
            $status->bindValue(15, $cliente->estado);
            $status->bindValue(16, $cliente->observacao);
            
            
            $status->execute();
            
            $this->connection = null;
            
        } catch (Exception $ex) {
            print_r($ex->getMessage());
            echo "Ocorreram erros ao inserir novo Cliente!";
            exit;
        }
    }
}
