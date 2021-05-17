<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>
<body>
        <form action="../../Controller/PetController.php?operation=cadastrar" method="POST" name="form_user">

        <h2>Sobre  o pet:</h2>
        <input type="text" name="txtNomePet" id="txtNomePet" placeholder="Nome do Pet"></input><br><br> 
        <label for="tipo">Identifique o pet:</label>
            <select name="tipo" id="tipo">
            <option value="cachorro" selected>Cachorro</option>
            <option value="gato">Gato</option>
            </select>
            <br><br>
            <input type="text" name="txtRaca" id="txtRaca" placeholder="Raça do Pet"></input><br><br>
      
        <input type="submit" value="cadastrar"></input>
        <input type="reset" value="Limpar"></input>
        
        </form>
</body>
</html>