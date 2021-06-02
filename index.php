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
        <p>Utiliza os botões abaixo para navegar!</p>


    </div>
    <div class="botao">
           <a href="view/User/create.php"> <button>Create</button></a>
   
            <button>adasdasd</button>
            </div>
            <form action="./Controller/AuthController.php?operation=login" method="POST" name="form_user">
        <input required type="text" name="txtEmail" id="txtEmail" placeholder="E-mail"/><br><br>
        <input required type="password" name="txtSenha" id="txtSenha" placeholder="Senha"/><br><br>
        <input type="submit" value="Login"/>
        <input type="reset" value="Limpar"/>
        </form>
</body>

</html>