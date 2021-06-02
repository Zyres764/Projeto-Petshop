<?php
session_start();
include '../Model/Pet.php';
include '../Include/PetValidate.php';
include '../Dao/PetDAO.php';

function criar() {

    $user = unserialize($_SESSION['usuario']);

    $lugar = new    User();
    $lugar->user_id = $user[0]['id'];
    $lugar->local = $_POST['txtLocal'];
    $lugar->pais = $_POST['txtPais'];

    $lugarDao = new PetDAO();
    $lugarDao->create($lugar);

    listar();

 /*   
    $erros = array();

    if (!PetValidate::testarNome($_POST['txtNomePet'])) $erros[] = 'Nome invalido';
    if (!PetValidate::testarRaca($_POST['txtRaca'])) $erros[] = 'Raça invalida';

    if (count($erros) == 0){
        $user = new User();

        $user->nomepet = $_POST['txtNomePet'];
        $user->raca = $_POST['txtRaca'];

        $userDao = new PetDAO();
        $userDao->create($user);

        $_SESSION['user'] = $user->nome;
        $_SESSION['raca'] = $user->email;
        header("location:../View/Pet/detail.php");
    }
    else{
        $err = serialize($erros);
        $_SESSION['erros'] = $err;
        header("location:../View/Pet/error.php");
    }
    */
}
function listar() {
    $userDao = new PetDAO();
    $usuarios = $userDao->search();

    $_SESSION['users'] = serialize($usuarios);
    header("location:../View/Pet/list.php");

}
function atualizar() {
    echo"Metodo para atualizar";
}
function deletar() {
    $id = $_GET['id'];
    if (isset($id)) {
        $userDao = new UserDAO();
        $userDao->delete($id);
        header("location:../../Controller/PetController.php?operation=consultar");
    }
    else{
        echo 'Pet informado não existente';
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
if (
    (!empty($_POST['txtNomePet'])) &&
    (!empty($_POST['txtRaca'])) 

) {
    $erros = array();

    if (!PetValidate::testarNome($_POST['txtNomePet'])) {
        $erros[] = 'Nome inválido';
    }
    if (!PetValidate::testarRaca($_POST['txtRaca'])) {
        $erros[] = 'Raça inválida';
    }

    if (count($erros) == 0) {
        $user = new User();

       
        $user->nomepet = $_POST['txtNomePet'];
        $user->raca = $_POST['txtRaca'];
        $userDao = new PetDAO();
        $userDao->create($user);
        $_SESSION['user'] = $user->nome;
        $_SESSION['raca'] = $user->email;
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
}
?>