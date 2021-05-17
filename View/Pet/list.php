<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Usuários</title>
</head>
<body>
     <?php
     if (isset($_SESSION['users'])){
         include_once '../../Model/User.php';

         $users = array();
         $users = unserialize($_SESSION['users']);

         foreach($users as $u) {
             $id = $u['id'];
             $nomeCompleto = $u['nome'].' '.$u['sobrenome'];
             echo "<tr><td><a href='../../Controller/PetController.php?operation=deletar&id=$id'>Deletar</a></td> - $nomeCompleto<br></tr>";  
         }
         unset($_SESSION['users']);
     }
     ?>
</body>
</html>