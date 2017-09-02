<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title> Cadstro de Usuário efetuado </title>
        
    </head>
    
    <body>
        <fieldset>
            <legend> <h1> Resultado </h1></legend>
            
            <?php
                 if(isset($_SESSION['descricao'])){
                     echo "</br> Produto: $_SESSION[descricao]";
                     
                     unset($_SESSION['descricao']);
                     
                }
            ?>
            
        </fieldset>
    </body>
</html>