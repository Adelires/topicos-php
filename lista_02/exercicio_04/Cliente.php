<?php

class Cliente {
   private $nome; 
   private $rg;
   private $endereco;
   
   public function __construct($nome, $rg, $endereco) {
       $this->nome = $nome;
       $this->rg = $rg;
       $this->endereco = $endereco;
   }
   
   function getNome() {
       return $this->nome;
   }

   function getRg() {
       return $this->rg;
   }

   function getEndereco() {
       return $this->endereco;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setRg($rg) {
       $this->rg = $rg;
   }

   function setEndereco($endereco) {
       $this->endereco = $endereco;
   }

}
