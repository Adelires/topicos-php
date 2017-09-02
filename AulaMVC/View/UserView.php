<!DOCTYPE>


<html>
    <head>
        <meta charset="utf-8">
        <title> Cadastro de Usúario </title>
        <link rel="stylesheet" href="../css/user.css">
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