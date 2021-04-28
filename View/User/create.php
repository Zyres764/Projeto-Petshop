<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>
<body>
        <form action="../../Controller/UserController.php" method="POST" name="form_user">
        <h2>Sobre o Usuário:</h2>
        <input type="text" name="txtNome" id="txtNome" placeholder="Nome"></input><br><br>
        <input type="text" name="txtSobrenome" id="txtSobrenome" placeholder="Sobrenome"></input><br><br>
        <input type="text" name="txtEmail" id="txtEmail" placeholder="E-mail"></input><br><br>
        <input type="text" name="txtIdade" id="txtIdade" placeholder="Idade"></input><br><br>
        <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha"></input><br><br>
        <h2>Sobre  o pet:</h2>
        <input type="text" name="txtNomePet" id="txtNomePet" placeholder="Nome do Pet"></input><br><br> 
        <label for="tipo">Identifique o pet:</label>
            <select name="tipo" id="tipo">
            <option value="cachorro" selected>Cachorro</option>
            <option value="gato">Gato</option>
            </select>
            <br><br>
            <input type="text" name="txtRaca" id="txtRaca" placeholder="Raça do Pet"></input><br><br>
      
        <input type="submit" value="cadastrar"></input>
        <input type="reset" value="Limpar"></input>
        
        </form>
</body>
</html>