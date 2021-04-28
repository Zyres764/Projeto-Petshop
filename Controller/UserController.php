<?php
include '../Model/User.php';
include '../Include/UserValidate.php';


//var_dump($_POST);
if ((!empty($_POST['txtNome'])) &&
    (!empty($_POST['txtSobrenome'])) &&
    (!empty($_POST['txtEmail'])) &&
    (!empty($_POST['txtIdade'])) &&
    (!empty($_POST['txtSenha'])) &&
    (!empty($_POST['txtNomePet'])) &&
    (!empty($_POST['txtRaca'])) 

) {
    $erros = array();

    if (!UserValidate::testarIdade($_POST['txtIdade'])) {
        $erros[] = 'Idade inválida';
    }
    if (!UserValidate::testarEmail($_POST['txtEmail'])) {
        $erros[] = 'E-mail inválido';
    }

    if (count($erros) == 0) {
        $user = new User();

        $user->nome = $_POST['txtNome'];
        $user->sobrenome = $_POST['txtSobrenome'];
        $user->idade = $_POST['txtIdade'];
        $user->email = $_POST['txtEmail'];
        $user->senha = $_POST['txtSenha'];
        $user->nomepet = $_POST['txtNomePet'];
        $user->raca = $_POST['txtRaca'];
        header("location:../View/User/detail.php?".
            "user= $user->nome& "."mail= $user->email");
        echo "Usuario $user->nome $user->sobrenome criado com sucesso";
    } else {
        $err = serialize($erros);
        header("location:../View/User/error.php?erros=$err");
    }
} else {
    $erros = array();
    $erros[] = 'Informe todos os campos';
    $err = serialize($erros);
    
    header("location:../View/User/error.php?erros=$err");
}
?>