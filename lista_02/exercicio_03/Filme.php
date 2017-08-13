<?php

class Filme {
    private $titulo;
    private $genero;
    private $diretor;
    private $atorPrincipal;
    
    public function __construct($titulo,Genero $genero, $diretor, $atorPrincipal) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->diretor = $diretor;
        $this->atorPrincipal =$atorPrincipal;    
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getGenero() {
        return $this->genero;
    }

    function getDiretor() {
        return $this->diretor;
    }

    function getAtorPrincipal() {
        return $this->atorPrincipal;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setDiretor($diretor) {
        $this->diretor = $diretor;
    }

    function setAtorPrincipal($atorPrincipal) {
        $this->atorPrincipal = $atorPrincipal;
    }
   
}
