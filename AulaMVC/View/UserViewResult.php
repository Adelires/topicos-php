<?php
    session_start();
 
?>


<!DOCTYPE html>

<html>
    <head>
        <link charset="utf-8">
        <link rel="stylesheet" href="../css/user.css">
        <title> Cadastro de Usuário efetuado </title>
       
    </head>
    
    <body>
        <fieldset>
            <legend> <h1> Resultado </h1></legend>
            
            <?php
                 if(isset($_SESSION['user']) && isset($_SESSION['email'])){
                     echo "</br> Usuário: $_SESSION[user] </br>E-mail: $_SESSION[email]";
                     
                     unset($_SESSION['user']);
                     unset($_SESSION['email']);
                }
            ?>
        </fieldset>
    </body>
</html>