<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../Proprietario//list.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Pets</title>
</head>

<body>
    <div>   
    <table class="tabela">
        <tr>
            <th>Delete</th>
            <th>Nome </th>
            <th>Raça </th>
        </tr>

            <?php
            if (isset($_SESSION['users'])) {
                include_once '../../Model/Pet.php';

                $users = array();
                $users = unserialize($_SESSION['users']);


                foreach ($users as $u) {
                    $id = $u['id'];
                    $nomeCompleto = $u['nomePet'];
                    $raca = $u['racaPet'];
                    echo "
                    <tr>
                                <td>
                                <a href='../../Controller/PetController.php?operation=deletar&id=$id'><i class='fas fa-trash'></i>
                                </a>
                                </td>
                                <td>
                                $nomeCompleto </td><br> 
                                <td>
                                $raca </td><br>
                                </tr>
                            ";
                }
                unset($_SESSION['users']);
            }
            ?>
            </table>
            </div>
</body>

</html>