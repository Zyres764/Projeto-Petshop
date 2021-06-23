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
    <title>Consulta de Usuários</title>
</head>
<body>
    <div class="voltar">
<button type="button" onclick="location.href='http://localhost:9992/View/app.php';" value="Go to Google" ><a><i class="fas fa-arrow-left"></i> Voltar</button>
</div> <div>      

        <h1>Listagem dos Usuários</h1>


    <table class="tabela">
        <tr>
            <th>Delete</th>
            <th>Id</th>
            <th>Nome Completo</th>
            <th>E-mail</th>
            <th>Idade </th>
        </tr>
     <?php
     if (isset($_SESSION['users'])){
         include_once '../../Model/User.php';

         $users = array();
         $users = unserialize($_SESSION['users']);

         foreach($users as $u) {
             $id = $u['id'];
             $nomeCompleto = $u['nome'].' '.$u['sobrenome'];
             $email = $u['email'];
             $Idade = $u['idade'];
             echo "
             <tr>
                         <td class='delete'>
                         <a href='../../Controller/UserController.php?operation=deletar&id=$id'><i class='fas fa-trash'></i>
                         </a>
                         </td>
                         <td>
                         $id </td>
                         <td>
                         $nomeCompleto </td>
                         <td>
                         $email </td>
                         <td>
                         $Idade</td>
                         </tr>
                     ";
         }
         unset($_SESSION['users']);
     } else {
         
         header('Location:../../Controller/UserController.php?operation=consultar');
     }
     ?>
</body>
</html>