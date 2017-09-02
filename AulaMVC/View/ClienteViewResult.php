<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title> Cadstro de Usuário efetuado </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/cliente.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">

        
    </head>
    
    <body>
        <fieldset>
             <div id="cima">
               <i> C:\WINDOWS\System32\CadatroDeCliente.exe </i>
               
               <div id="icons">
                   <span><i class="fa fa-window-minimize" aria-hidden="true"></i></span>
                   <span><i class="fa fa-window-maximize" aria-hidden="true"></i></span>
                   <span><i class="fa fa-times" aria-hidden="true"></i></i></span>
               </div>
            </div>
            
            <div id="box-cmd">
            
                <?php
                    if(isset($_SESSION['nome']) && isset($_SESSION['sobrenome'])){
                        echo "</br> Usuário: $_SESSION[nome] $_SESSION[sobrenome]";

                        unset($_SESSION['nome']);
                        unset($_SESSION['sobrenome']);
                   }
                ?>
            </div>
        </fieldset>
    </body>
</html>