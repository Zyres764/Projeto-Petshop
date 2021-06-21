<?php
session_start();
include '../Model/User.php';
include '../Include/UserValidate.php';
include '../Dao/UserDAO.php';

function criar() {
    
    $erros = array();

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
?>