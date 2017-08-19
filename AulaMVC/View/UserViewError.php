<!DOCTYPE html>

<html>
    <head>
        <title> Cadastro de Usuário com Erros</title>
        
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
                color:red;
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }
 
        </style>
    </head>
    
    <body>
        <fieldset>
            <legend> <h1> ERROS! </h1></legend>
            
            <?php 
                if(isset($_GET['erros'])){
                    $erros = array();
                    $erros = unserialize($_GET['erros']);
                }
                
                foreach ($erros as $e){
                    echo "</br> <b>$e </b>";
                }
            
            ?>
        </fieldset>
    </body>
</html>
