<!DOCTYPE html>

<html>
    <head>
        <title> Cadstro de Usuário efetuado </title>
        
        <style>
            
             body{
                background-image: url('https://s-media-cache-ak0.pinimg.com/originals/05/5b/d4/055bd490c2355faa323ca76d125b9f9e.jpg');
                background-size: cover;
            }
            
            fieldset{
                width: 400px;
                margin: auto;
                background-color: white;
                border-radius: 8px;
               
                -webkit-box-shadow: -1px 3px 38px -1px rgba(0,0,0,0.75);
                -moz-box-shadow: -1px 3px 38px -1px rgba(0,0,0,0.75);
                box-shadow: -1px 3px 38px -1px rgba(0,0,0,0.75);
            }
            
            legend{
                color: #b6bca0;
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }
            
        </style>
        
    </head>
    
    <body>
        <fieldset>
            <legend> <h1> Resultado </h1></legend>
            
            <?php
                 if(isset($_GET['user']) && isset($_GET['email'])){
                     echo "</br> Usuário: $_GET[user] </br>E-mail: $_GET[email]";
                }
            ?>
        </fieldset>
    </body>
</html>