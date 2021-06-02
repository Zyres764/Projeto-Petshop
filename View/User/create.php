<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="Estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>
<body>
    <div class="form">  
        <form action="../../Controller/UserController.php?operation=cadastrar" method="POST" name="form_user">
        <h2>Sobre o Usuário:</h2>
        <input required type="text" name="txtNome" id="txtNome" placeholder="Nome"></input><br><br>
        <input required type="text" name="txtSobrenome" id="txtSobrenome" placeholder="Sobrenome"></input><br><br>
        <input required type="text" name="txtEmail" id="txtEmail" placeholder="E-mail"></input><br><br>
        <input required type="text" name="txtIdade" id="txtIdade" placeholder="Idade"></input><br><br>
        <input required type="password" name="txtSenha" id="txtSenha" placeholder="Senha"></input><br><br>
        
        <input type="submit" value="cadastrar"></input>
        <input type="reset" value="Limpar"></input>
        
        </form>
    </div>
</body>
</html>