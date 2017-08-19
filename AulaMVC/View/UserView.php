<!DOCTYPE>


<html>
    <head>
        <meta charset="utf-8">
        <title> Cadastro de Usúario </title>
        
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
            
            fieldset h1{
                font-family: sans-serif;
            }
            
            legend{
                color: #b6bca0;
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }
            
            label{
                font-weight: bold;
                font-family: sans-serif;
            }
            
            input{
                width: 100%;
                padding: 5px;
                margin-bottom: 15px;
            }
            
            input[type="submit"], input[type="reset"]{
                width: auto;
 
            }
            
            #botao{
                text-align: right;
            }
        </style>
    </head>
   
    
    <body>
        <fieldset>
            <legend> <h1> Cadastro de Usuário </h1> </legend>
            
            <form action="../Contoller/UserControler.php" method="POST" name="cadUser"> 
                
                <label for="txtUser"> User :</label> </br>
                <input type="text" name="txtUser" id="txtUser" placeholder="Usuário"></br>
                <label for="txtNome"> Nome :</label> </br>
                <input type="text" name="txtNome" id="txtNome" placeholder="Nome"></br>
                <label for="txtSobrenome"> Sobrenome :</label> </br>
                <input type="text" name="txtSobrenome" id="txtSobrenome" placeholder="Sobrenome"></br>
                <label for="txtEmail"> Email :</label> </br>
                <input type="text" name="txtEmail" id="txtEmail" placeholder="Email"></br>
                <label for="txtIdade"> Idade :</label> </br>
                <input type="text" name="txtIdade" id="txtIdade" placeholder="Idade"></br>
                <label for="pwdSenha"> Senha :</label> </br>
                <input type="password" name="pwdSenha" id="pwdSenha" placeholder="Senha"></br> </br>
                
                <div id="botao">
                    <input type="submit" name="btCadastrar" id="btCadastrar" value="Cadastrar"> 
                    <input type="reset" name="btLimpar" id="btLimpar" placeholder="Limpar">
                </div>
            </form>
            
        </fieldset>
    </body>
</html>