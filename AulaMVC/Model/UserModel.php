<?php

class UserModel {
    private $user;
    private $nome;
    private $sobrenome;
    private $idade;
    private $password;
    private $email;
    
    public function __construct() {

    }
    
    public function __get($propriedade) {
        return $this->$propriedade;
        
    }

    public function __set($propriedade, $valor) {
        $this->$propriedade = $valor;
        
    }

    

}
