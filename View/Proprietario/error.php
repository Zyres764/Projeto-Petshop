<?php
session_start()
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
    <h1>Erros</h1>

    <?php
        if (isset($_SESSION['erros'])) {

            $erros = array();
            $erros = unserialize($_SESSION['erros']);

            foreach ($erros as $e) {
                echo '<br/> ' . $e;
            }
            unset($_SESSION['erros']);
        } 
    ?>
</body>
</html>