<?php
    
    $resposta = "DIGITE 4 VALORES!";
    
    if(isset($_GET['valorA']) && isset($_GET['valorB']) && isset($_GET['valorC']) && isset($_GET['valorD'])){
        
        $soma = $_GET['valorA'] + $_GET['valorD'];
        
        $divisao = $_GET['valorB'] / $_GET['valorC'];
        
        if($soma > $divisao){
            $resposta = "O resultado de $_GET[valorA] + $_GET[valorD] = $soma  é maior que $_GET[valorB] / $_GET[valorC] = $divisao ";
        } else if($soma < $divisao){
            $resposta = "O resultado de $_GET[valorB] / $_GET[valorC] = $divisao é maior que  $_GET[valorA] + $_GET[valorD] = $soma" ;
        } else{
            $resposta = " O resultado de $_GET[valorB] / $_GET[valorC] = $divisao é igual a  $_GET[valorA] + $_GET[valorD] = $soma" ;
        }
    }

?>

<div>
    
    <form>
        <input type="text" name="valorA">
        <input type="text" name="valorB">
        <input type="text" name="valorC">
        <input type="text" name="valorD">
        
        <input type="submit" value="Enviar">
    
    </form>
</div>

<?= $resposta ?>

<style>
    
    div{
        width: 400px;
       
    }
    h1{
        color: blue;
       
    }
    
    input{
        width: 50px;
    }
    
</style>