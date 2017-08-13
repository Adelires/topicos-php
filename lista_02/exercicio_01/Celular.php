<?php

class Celular {
    private $nome;
    private $marca;
    private $tamTela;
    private $memInterna;
    private $ram;
    private $preco;
    
    public function __construct($nome, $marca, $tamTela, $memIntena, $ram, $preco) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->tamTela = $tamTela;
        $this->memInterna = $memIntena;
        $this->ram = $ram;
        $this->preco = $preco;
              
    }
    
    public function mostraDados(){
        echo " <h3> Modelo: " . $this->nome . "</h3>";
        echo "Marca: " . $this->marca . "</br>";
        echo "Tamanho da Tela: " . $this->tamTela . "</br>";
        echo "Memoria Intena: " . $this->memInterna . "</br>";
        echo "Memoria RAM: " . $this->ram . "</br>";
        echo "Preço: " . $this->preco . "</br>";
    }
    
    function getNome() {
        return $this->nome;
    }

    function getMarca() {
        return $this->marca;
    }

    function getTamTela() {
        return $this->tamTela;
    }

    function getMemInterna() {
        return $this->memInterna;
    }

    function getRam() {
        return $this->ram;
    }

    function getPreco() {
        return $this->preco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setTamTela($tamTela) {
        $this->tamTela = $tamTela;
    }

    function setMemInterna($memInterna) {
        $this->memInterna = $memInterna;
    }

    function setRam($ram) {
        $this->ram = $ram;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

 
}
