<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Cadastro de Cliente</title>
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
            
            <form method="POST" action="../Contoller/ClienteControler.php">
                <label for="nome"> Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Nome">
                
                <label for="sobrenome"> Sobrenome: </label>
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome"> <br/>
                
                <label for="dtNascimento"> Nascimento: </label>
                <input type="text" name="dtNascimento" id="dtNascimento" placeholder="Data de Nascimento"> <br/>
                
                <label for="cpf"> CPF: </label>
                <input type="text" name="cpf" id="cpf" placeholder="Cpf"> <br/>
                
                <label for="sexo"> Genero: </label>
                <input type="radio" name="sexo" id="sexo" checked value="F"> F
                <input type="radio" name="sexo" id="sexo" value="M"> M<br/>
                
                <label for="profissao"> Profissão: </label>
                <input type="text" name="profissao" id="profissao" placeholder="Profissão"> <br/>
                
                <label for="telefone"> Telefone: </label>
                <input type="text" name="telefone" id="" placeholder="Telefone"> <br/>
                
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email" placeholder="E-mail"> <br/>
                
                <label for="cep"> CEP: </label>
                <input type="text" name="cep" id="cep" placeholder="CEP"> <br/>
                
                <label for="endereco"> Endereço: </label>
                <input type="text" name="endereco" id="endereco" placeholder="Endereço"> <br/>
                
                <label for="numero"> Numero: </label>
                <input type="text" name="numero" id="numero" placeholder="Numero"> <br/>
                
                <label for="complemento"> Complemento: </label>
                <input type="text" name="complemento" id="complemento" placeholder="Complemento"> <br/>
                
                <label for="bairro"> Bairro: </label>
                <input type="text" name="bairro" id="bairro" placeholder="Bairro"> <br/>
                
                <label for="cidade"> Cidade: </label>
                <input type="text" name="cidade" id="cidade" placeholder="Cidade"> <br/>
                
                <label for="estado">Estado: </label>
                <input type="text" name="estado" id="estado" placeholder="Estado"> <br/>
                
                <label for="observacao"> Observação: </label>
                <textarea name="observacao" id="observacao" placeholder="Observação"></textarea>
                
                <div id="botao">
                    <input type="reset" name="btLimpar" id="btLimpar" placeholder="Limpar">
                    <input type="submit" name="btCadastrar" id="btCadastrar" value="Cadastrar"> 

                </div>
            </form>
        </fieldset>
    </body>
</html>

