<?php

class Genero {
    private $nome;
    private $classificacao;
    
    public function __construct($nome, $classificacao) {
        $this->nome = $nome;
        $this->classificacao = $classificacao;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getClassificacao() {
        return $this->classificacao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setClassificacao($classificacao) {
        $this->classificacao = $classificacao;
    }


}
