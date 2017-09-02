<?php

class ClienteValidate{
    
    public static function validaTexto($param){
        if(!is_numeric($param)){
            return true;
        } else {
            return false;
        } 
    }
    
    public static function validaDtNascimento($param){
        $data = explode("/", $param);
        
        return checkdate($data[1], $data[0], $data[2]);
    }
    
    public static function validaNumero($param){
        if(is_numeric($param)){
            return true;
        } else {
            return false;
        }
    }
}
