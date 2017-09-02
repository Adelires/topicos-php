<?php

    session_start();

  include '../Model/ClienteModel.php';
  include '../Include/ClienteValidate.php';
  include '../Persistence/ConnectionDB.php';
  include '../Dao/ClienteDAO.php';

//  print_r($_POST);exit;
  
if ((!empty($_POST['nome'])) &&
    (!empty($_POST['sobrenome'])) &&
    (!empty($_POST['dtNascimento'])) &&
    (!empty($_POST['cpf'])) &&
    (!empty($_POST['sexo'])) &&
    (!empty($_POST['profissao'])) &&
    (!empty($_POST['telefone'])) &&
    (!empty($_POST['email'])) &&
    (!empty($_POST['cep'])) &&
    (!empty($_POST['endereco'])) &&
    (!empty($_POST['numero'])) &&
    (!empty($_POST['complemento'])) &&
    (!empty($_POST['bairro'])) &&
    (!empty($_POST['cidade'])) &&
    (!empty($_POST['estado'])) &&
    (!empty($_POST['observacao'])))
    {
    
    $erros =  array();
    
    if(!ClienteValidate::validatexto($_POST['nome'])){
        $erros[] = 'Nome inválido!';
    }
    
    if(!ClienteValidate::validatexto($_POST['sobrenome'])){
        $erros[] = 'Sobrenome inválido!';
    }
    
    if(!ClienteValidate::validaDtNascimento($_POST['dtNascimento'])){
        $erros[] = 'Data de Nascimento inválida!';
    }
    
    if(!ClienteValidate::validaNumero($_POST['cpf'])){
        $erros[] = 'Cpf inválido!';
    }
    
    if(!ClienteValidate::validatexto($_POST['profissao'])){
        $erros[] = 'Profissao inválida!';
    }
    
    if(!ClienteValidate::validaNumero($_POST['telefone'])){
        $erros[] = 'Telefone inválido!';
    }
   
    if(!ClienteValidate::validaNumero($_POST['cep'])){
        $erros[] = 'Cep inválido!';
    }
    
    if(!ClienteValidate::validaNumero($_POST['numero'])){
        $erros[] = 'Numero inválido!';
    }
   
    if(count($erros)==0){
        
       $cliente = new ClienteModel();
       
       foreach ($_POST as $prop => $value) {
           $cliente->$prop = $value;
       }
       
       $clienteDao = new ClienteDAO();
       $clienteDao->insertCliente($cliente);
       
       $_SESSION['nome'] = $cliente->nome;
       $_SESSION['sobrenome'] = $cliente->sobrenome;
       
       header("location:../View/ClienteViewResult.php");
        
    } else {
        
       $err = serialize($erros);
       
       $_SESSION['erros'] = $err;

              
       header("location:../View/ClienteViewError.php?" . "erros=$err");
    } 
    
} else {
    
    echo "Informe todos os campos!";
}
?>