<?php
    session_start();
?>


<!DOCTYPE html>

<html>
    <head>
        <title> Cadastro de Usuário com Erros</title>
        
    </head>
    
    <body>
        <fieldset>
            <legend> <h1> ERROS! </h1></legend>
            
            <?php 
                if(isset($_SESSION['erros'])){
                    $erros = array();
                    $erros = unserialize($_SESSION['erros']);
                }
                
                foreach ($erros as $e){
                    echo "</br> <b>$e </b>";
                }
                
                unset($_SESSION['erros']);
            
            ?>
        </fieldset>
    </body>
</html>
