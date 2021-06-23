<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../View/CSS/listagem.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Para acessar a listagem de usuário </h1>
     <a href="http://localhost:9992/View/User/list.php"><img src="../image/user.png"> </a></div>
    <div>
    <h1>Para acessar a listagem de Pet </h1>
    <a href="http://localhost:9992/View/Pet/list.php"><img src="../image/pet.png"></a>
    <button type="button" onclick="location.href='http://localhost:9992/View/app.php';" value="Go to Google" ><a><i class="fas fa-arrow-left"></i> Voltar</button>
    </div>
    <div>
    <h1>Para acessar a listagem do Proprietário </h1>
    <a href="http://localhost:9992/View/Proprietario/list.php"><img src="../image/prop.png"></a></div>
</body>
</html>