<?php

class Telefone {
    private $numero;
    private $cliente;
    private $valTotLigacao;
    
    
    public function __construct($numero, Cliente $cliente, $valTotLigacao=0) {
        $this->numero = $numero;
        $this->cliente = $cliente;
        $this->valTotLigacao = $valTotLigacao;
    }
    
    public function fazerLigacao($tempLigacao, $tipoLigacao){
        
        if($tipoLigacao == "comum"){
            $custo = $tempLigacao * 0.50;
            
        } else {
            $custo = $tempLigacao * 1.20;

        }
        
        $this-> valTotLigacao += $custo;
    }
            
    function getNumero() {
        return $this->numero;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getValTotLigacao() {
        return $this->valTotLigacao;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setValTotLigacao($valTotLigacao) {
        $this->valTotLigacao = $valTotLigacao;
    }


}
