<?php

class ClienteModel {
    private $nome;
    private $sobrenome;
    private $dtNascimento;
    private $cpf;
    private $sexo;
    private $profissao;
    private $telefone;
    private $email;
    private $cep;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $estado;
    private $observacao;
    
    function __construct() {
        
    }
    
    public function __set($propriedade, $valor){
        $this->$propriedade = $valor;
    }
    
    public function __get($propriedade) {
         return $this->$propriedade;
    }
    
}
