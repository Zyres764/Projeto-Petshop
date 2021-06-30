<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="../CSS/view.css">
    <meta charset="UTF-8">
    <title>Cadastro do Pet</title>
</head>
<body>
<script>
function goBack() {
  window.history.back();
}
</script>
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
        <input type="text" name="txtEspecie" id="txtEspecie" placeholder="Espécie do Pet"></input><br><br>
        <button type="submit" value="cadastrar">Cadastrar</button>
        <button type="button" onclick="location.href='http://localhost:9992/View/app.php';" value="Go to Google" >Voltar</button>
        
        </form>
        </div>
</body>
</html>