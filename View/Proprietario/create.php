<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="Estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Proprietário</title>
</head>
<body>

    <div class="form">  
        <form action="../../Controller/ProprietarioController.php?operation=cadastrar" method="POST" name="form_proprietario">
        <h2>Sobre o Proprietário:</h2>
        <input required type="text" name="txtNome" id="txtNome" placeholder="Nome"></input><br><br>
        <input required type="text" name="txtEstabelecimento" id="txtEstabelecimento" placeholder="Nome do Estabelecimento"></input><br><br>
        <input required type="text" name="txtCNPJ" id="txtCNPJ" placeholder="CNPJ"></input><br><br>
        
        <input type="submit" value="cadastrar"></input>
        <input type="reset" value="Limpar"></input>
        
        </form>
    </div>
</body>
</html>