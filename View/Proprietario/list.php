<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Proprietario</title>
</head>
<body>
     <?php
     if (isset($_SESSION['Proprietario'])){
         include_once '../../Model/Proprietario.php';

         $Proprietario = array();
         $Proprietario = unserialize($_SESSION['Proprietario']);

         foreach($Proprietario as $u) {
             $id = $u['id'];
             $nomeCompleto = $u['nome'].' '.$u['Empresa'];
             $CNPJ = $u['CNPJ']; 
             echo "<tr><td><a href='../../Controller/ProprietarioController.php?operation=deletar&id=$id'>Deletar</a></td> - $nomeCompleto<br> - $CNPJ<br></tr>";  
         }
         unset($_SESSION['Proprietario']);
     }
     ?>
</body>
</html>