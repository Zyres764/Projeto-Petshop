<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../Proprietario/Estilos.css">
    <meta charset="UTF-8">
    <title>Cadastro do Pet</title>
</head>
<body>
<div>   
<?php
            $user= unserialize($_SESSION['usuario']);
            if(!$user)
                header("location:../../index.php")
        ?>
    <h3><?php echo $user[0]['nome'] ?></h3>
        <form class="form" action="../../Controller/PetController.php?operation=cadastrar" method="POST" name="form_pet">

        <h2>Sobre  o pet:</h2>
        <input type="text" name="txtNomePet" id="txtNomePet" placeholder="Nome do Pet"></input><br><br> 
        <input type="text" name="txtRaca" id="txtRaca" placeholder="Raça do Pet"></input><br><br>
      
        <button type="submit" value="cadastrar">Cadastrar</button>
        <button type="reset" value="Limpar">Limpar</button>
       
        
        </form>
        </div>
</body>
</html>