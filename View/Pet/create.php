<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="Estilos.css">
    <meta charset="UTF-8">
    <title>Cadastro do Pet</title>
</head>
<body>
    <?php 
        $user = unserialize($_SESSION['usuario']);
    ?>
    <h3><?php $user[0]['nome'] ?></h3>
        <form action="../../Controller/PetController.php?operation=cadastrar" method="POST" name="form_user">

        <h2>Sobre  o pet:</h2>
        <input type="text" name="txtNomePet" id="txtNomePet" placeholder="Nome do Pet"></input><br><br> 
        <input type="text" name="txtRaca" id="txtRaca" placeholder="Raça do Pet"></input><br><br>
      
        <input type="submit" value="cadastrar"></input>
        <input type="reset" value="Limpar"></input>
        
        </form>
</body>
</html>