<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Estilos.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<div class="intro">
        <h1>Bem Vindo!</h1>
       


    </div>
    <div class="botao">
           <a href="User/create.php"> <button>Usuario</button></a>
           <a href="Pet/create.php"> <button>Pet</button></a>
    </div>
    <?php
        if (isset($_SESSION['usuario'])) {
            echo "<h1>Usuario Online</h1><p>";
            echo '<br><a href="../Controller/AuthController.php?operation=logout">LOGOUT</a><br>';
        }
        else
            echo "<h1>USUÁRIO OFFLINE</h1><p>";
    ?>
    <div class="intro">
    <br>
     <p >Utiliza os botões abaixo para navegar!</p>
    </div>
</body>
</html>