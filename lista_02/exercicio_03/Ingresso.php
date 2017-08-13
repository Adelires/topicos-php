<?php

class Ingresso {
    
    private $filme;
    private $sessao;
    private $preco;
    
    public function __construct(Filme $filme, Sessao $sessao) {
        $this->filme = $filme;
        $this-> sessao = $sessao;
        $this->calculaPreco();
    }
    
    private function calculaPreco(){
        
        if($this->sessao->getHora() >= 20){
            $this->preco = 22;
        } else {
            $this->preco = 16;
        }
    }
    
}
