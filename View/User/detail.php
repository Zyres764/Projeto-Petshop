<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        if (isset($_GET['user']) && isset($_GET['mail'])){
            echo'<br> Usuario' .$_GET['user'] . 
                '<br> E-mail' .$_GET['mail'];

        } 
     ?>
</body>
</html>