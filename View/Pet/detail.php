<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/view.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        
        if (isset($_SESSION['nome']) && isset($_SESSION['Estabelecimento']) && isset($_SESSION['CNPJ'])){
            echo'<br> Usuario' .$_SESSION['nome'] . 
                '<br> Usuario' .$_SESSION['Estabelecimento'] . 
                '<br> Raça' .$_SESSION['CNPJ'];

                unset ($_SESSION ['nome']);
                unset ($_SESSION ['Estabelecimento']);
                unset ($_SESSION ['CNPJ']);
        } 

     ?>
</body>
</html>