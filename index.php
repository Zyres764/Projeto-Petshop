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
        <h1>Realize Login Abaixo!</h1>
        <br>
 


    </div>
    <div class="Form">  
            <form action="./Controller/AuthController.php?operation=login" method="POST" name="form_user">
            <p>Digite o Email:</p>
        <input required type="text" name="txtEmail" id="txtEmail" placeholder="E-mail"/><br><br>
        <p>Digite a Senha:</p>
        <input required type="password" name="txtSenha" id="txtSenha" placeholder="Senha"/><br><br>
        <input type="submit" value="Login"/>
        <input type="reset" value="Limpar"/>
        </form>
        </div>
</body>

</html>