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
    <br>
    <br>
    <br>
    <br>
    <br>
        <h1>Realize Login Abaixo!</h1>
        <br>
 


    </div>
    <div >  
            <form class="form" action="./Controller/AuthController.php?operation=login" method="POST" name="form_user">
            <p>Digite o Email:</p>
        <input required type="text" name="txtEmail" id="txtEmail" placeholder="E-mail"/><br><br>
        <p>Digite a Senha:</p>
        <input required type="password" name="txtSenha" id="txtSenha" placeholder="Senha"/><br><br>
        <button class="btn-grad" type="submit" value="cadastrar">Cadastrar</button>
        <button type="reset" value="Limpar">Limpar</button>
        </form>
        </div>
</body>

</html>