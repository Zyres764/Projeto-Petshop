<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<link rel="stylesheet" href="../CSS/list.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Proprietario</title>
</head>
<body>
<div class="voltar">
<button type="button" onclick="location.href='http://localhost:9992/View/app.php';" value="Go to Google" ><a><i class="fas fa-arrow-left"></i> Voltar</button>
</div> 
    <div>   
            
    <h1>Listagem dos Proprietários</h1>


    <table class="tabela">
        <tr>
            <th>Delete</th>
            <th>Nome </th>
            <th>Estabelecimento </th>
            <th>CNPJ </th>
        </tr>
     <?php
     
     if (isset($_SESSION['users'])){
         include_once '../../Model/Proprietario.php';

         $Proprietario = array();
         $Proprietario = unserialize($_SESSION['users']);

         foreach($Proprietario as $u) {
             $id = $u['id'];
             $nomeCompleto = $u['nome'];
             $empresa = $u['Estabelecimento'];
             $CNPJ = $u['CNPJ']; 
             echo "
             <tr>
                         <td class='delete'>
                         <a href='../../Controller/ProprietarioController.php?operation=deletar&id=$id'><i class='fas fa-trash'></i>
                         </a>
                         </td>
                         <td>
                         $nomeCompleto </td>
                         <td>
                         $empresa </td>
                         <td>
                         $CNPJ</td>
                         </tr>
                     ";
         }
         unset($_SESSION['users']);
     } else {
         
         header('Location:../../Controller/ProprietarioController.php?operation=consultar');
     }
     ?>
</body>
</html>