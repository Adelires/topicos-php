<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Castro de Produtos</title>
        <meta charset="utf-8">
        
    </head>
    
    <body>
        <fieldset>
            <legend> Cadatro de Produto </legend>
            
            <form method="POST" action="../Contoller/ProdutoControler.php">
                <label for="descricao"> Descrição: </label>
                <input type="text" name="descricao" id="descricao" placeholder="Descrição">
                
                <label for="codigo"> Código de Referência : </label>
                <input type="text" name="codigo" id="codigo" placeholder="Codigo"> <br/>
                
                <label for="marca"> Marca: </label>
                <input type="text" name="marca" id="marca" placeholder="Marca"> <br/>
              
                <div id="botao">
                    <input type="submit" name="btCadastrar" id="btCadastrar" value="Cadastrar"> 
                    <input type="reset" name="btLimpar" id="btLimpar" placeholder="Limpar">
                </div>
            </form>
        </fieldset>
    </body>
</html>


