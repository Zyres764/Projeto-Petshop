<?php
session_start();
include '../Model/User.php';
include '../Include/UserValidate.php';
include '../Dao/UserDAO.php';

function criar() {
    
    $erros = array();

    /*if (!UserValidate::testarIdade($_POST['txtIdade'])) $erros[] = 'Idade Invalida';
    if (!UserValidate::testarEmail($_POST['txtEmail'])) $erros[] = 'E-mail Invalido';

    if (count($erros) == 0){
        $user = new User();

        $user->nome = $_POST['txtNome'];
        $user->sobrenome = $_POST['txtSobrenome'];
        $user->email = $_POST['txtEmail'];
        $user->idade = $_POST['txtIdade'];
        $user->senha = $_POST['txtSenha'];

        $userDao = new UserDAO();
        $userDao->create($user);

        $_SESSION['user'] = $user->nome;
        $_SESSION['mail'] = $user->email;
        header("location:../View/User/list.php");
*/
        $user = new User();
        $user->nome = $_POST['txtNome'];
        $user->sobrenome = $_POST['txtSobrenome'];
        $user->email = $_POST['txtEmail'];
        $user->idade = $_POST['txtIdade'];
        $user->senha = $_POST['txtSenha'];

        $UserDAO = new UserDAO();
        $UserDAO->create($user);
    listar();


    }
function listar() {
    $userDao = new UserDAO();
    $usuarios = $userDao->search();

    $_SESSION['users'] = serialize($usuarios);
    header("location:../View/User/list.php");

}
function atualizar() {
    echo"Metodo para atualizar";
}
function deletar() {
    $id = $_GET['id'];
    if (isset($id)) {
        $userDao = new UserDAO();
        $userDao->delete($id);
        header("location:../../Controller/UserController.php?operation=consultar");
    }
    else{
        echo 'Usuário informado não existente';
    }
}


$operacao = $_GET['operation'];
if (isset($operacao)) {
    switch($operacao) {
        case 'cadastrar';
        criar();
        break;

        case 'consultar';
        listar();
        break;

        case 'atualizar';
        atualizar();
        break;

        case 'deletar';
        deletar();
        break;
    }

}
//var_dump($_POST);
/*if ((!empty($_POST['txtNome'])) &&
    (!empty($_POST['txtSobrenome'])) &&
    (!empty($_POST['txtEmail'])) &&
    (!empty($_POST['txtIdade'])) &&
    (!empty($_POST['txtSenha']))
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

        
        $userDao = new UserDAO();
        $userDao->create($user);
        $_SESSION['user'] = $user->nome;
        $_SESSION['mail'] = $user->email;
        header("location:../View/User/detail.php");
    } else {
        $err = serialize($erros);
        $_SESSION['erros'] = $err;
        header("location:../View/User/error.php?erros=$err");
    }
} else {
    $erros = array();
    $erros[] = 'Informe todos os campos';
    $err = serialize($erros);
    $_SESSION['erros'] = $err;
    header("location:../View/User/error.php?erros=$err");
}*/
?>