<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/5.x/dist/jquery.inputmask.js"></script>
<link rel="stylesheet" href="../CSS/view.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Proprietário</title>
</head>
<body>

    <div>  
    <?php   $user= unserialize($_SESSION['usuario']);
            if(!$user)
                header("location:../../index.php")
        ?>
        <form class="form"action="../../Controller/ProprietarioController.php?operation=cadastrar" method="POST" name="form_proprietario">
        <h2>Sobre o Proprietário:</h2>
        <input required type="text" name="txtNome" id="txtNome" placeholder="Nome"></input><br><br>
        <input required type="text" name="txtEstabelecimento" id="txtEstabelecimento" placeholder="Nome do Estabelecimento"></input><br><br>
        <input required type="text" name="txtCNPJ" id="txtCNPJ" placeholder="CNPJ" ></input><br><br>
        <script>
                    $(document).ready(function() {
                        $("#txtCNPJ").inputmask('99.999.999/9999-99');
                    });
                </script>
        <button type="submit" value="cadastrar">Cadastrar</button>
        <button type="button" onclick="location.href='http://localhost:9992/View/app.php';" value="Go to Google" >Voltar</button>
    
        </form>
    </div>
</body>
</html>