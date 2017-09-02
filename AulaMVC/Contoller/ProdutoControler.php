<?php

   session_start();
   
include '../Model/ProdutoModel.php';
include '../Persistence/ConnectionDB.php';
include '../Dao/ProdutoDAO.php';

//  print_r($_POST);exit;

if ((!empty($_POST['descricao'])) &&
        (!empty($_POST['codigo'])) &&
        (!empty($_POST['marca']))) {

    $prod = new ProdutoModel();

    foreach ($_POST as $prop => $value) {
        $prod->$prop = $value;
    }
    
    $produtoDao = new ProdutoDAO();
    $produtoDao->insertProduto($prod);
    
    $_SESSION['descricao'] = $prod->descricao;
    

    header("location:../View/ProdutoViewResult.php");
} else {

    $err = serialize(["Favor preencher todos os campos."]);
    
    $_SESSION['erros'] = $err;
    
    header("location:../View/ProdutoViewError.php?" . "erros=$err");
}