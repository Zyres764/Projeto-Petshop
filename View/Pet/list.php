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
    <title>Consulta de Pets</title>
</head>

<body>
<div class="voltar">
<button type="button" onclick="location.href='http://localhost:9992/View/app.php';" value="Go to Google" ><a><i class="fas fa-arrow-left"></i> Voltar</button>
</div> <div> 
    
        <h1>Listagem dos Pets</h1>

    <table class="tabela">
        <tr>
            <th>Delete</th>
            <th>Dono id </th>
            <th>Nome </th>
            <th>Raça </th>
            <th>Espécie </th>
        </tr>

            <?php
            if (isset($_SESSION['users'])) {
                include_once '../../Model/Pet.php';

                $users = array();
                $users = unserialize($_SESSION['users']);


                foreach ($users as $u) {
                    $id = $u['id'];
                    $dono = $u['dono'];
                    $nomeCompleto = $u['nomePet'];
                    $raca = $u['racaPet'];
                    $Especie = $u['Especie'];
                    echo "
                    <tr>
                                <td class='delete'>
                                <a href='../../Controller/PetController.php?operation=deletar&id=$id'><i class='fas fa-trash'></i>
                                </a>
                                </td>
                                <td>
                                 $dono </td>
                                <td>
                                $nomeCompleto </td>
                                <td>
                                $raca </td>
                                <td>
                                $Especie </td>
                                </tr>
                            ";
                }
                unset($_SESSION['users']);
            } else {
                
                header('Location:../../Controller/PetController.php?operation=consultar');
            }
            ?>
            </table>
            </div>
</body>

</html>