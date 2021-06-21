<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="Estilos.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Proprietario/Estilos.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>
<body>

    <div >  
 <?php   $user= unserialize($_SESSION['usuario']);
            if(!$user)
                header("location:../../index.php")
        ?>
        <form class="form" action="../../Controller/UserController.php?operation=cadastrar" method="POST" name="form_user">
        <h2>Sobre o Usuário:</h2>
        <input required type="text" name="txtNome" id="txtNome" placeholder="Nome"></input><br><br>
        <input required type="text" name="txtSobrenome" id="txtSobrenome" placeholder="Sobrenome"></input><br><br>
        <input required type="text" name="txtEmail" id="txtEmail" placeholder="E-mail"></input><br><br>
        <input required type="number" name="txtIdade" id="txtIdade" placeholder="Idade"></input><br><br>
        <input required type="password" name="txtSenha" id="txtSenha" placeholder="Senha"></input><br><br>
        
        <button class="btn-grad" type="submit" value="cadastrar">Cadastrar</button>
        <button type="button" onclick="location.href='http://localhost:9992/View/app.php';" value="Go to Google" >Voltar</button>
        
        </form>
    </div>
</body>
</html>