<?php

class ConnectionDB extends PDO{
    private static $instance = null;
    
    public function ConnectionDB($dsn, $usuario, $senha){
        parent::__construct($dsn, $usuario, $senha);
    }
    
    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new ConnectionDB("mysql:dbname=ecomm;host=localhost", "root", "");
                
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connectado ao Banco de Dados!";
            } catch (Exception $ex) {
                echo "Ocorreram erros ao tentar conectar no banco de dados!";
                echo "$ex";
                exit();
            }
        }
        
        return self::$instance;
    }
}