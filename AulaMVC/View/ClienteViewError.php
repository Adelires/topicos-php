<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title> Cadastro de Usuário com Erros</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/cliente.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">

    </head>
    
    <body>
        <fieldset>
            <div id="cima">
               <i> C:\WINDOWS\System32\CadatroDeCliente\erros </i>
               
               <div id="icons">
                   <span><i class="fa fa-window-minimize" aria-hidden="true"></i></span>
                   <span><i class="fa fa-window-maximize" aria-hidden="true"></i></span>
                   <span><i class="fa fa-times" aria-hidden="true"></i></i></span>
               </div>
            </div>
            
            <div id="box-cmd">
            
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
            </div>
        </fieldset>
    </body>
</html>
