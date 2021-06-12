<?php
session_start();
include '../Model/Proprietario.php';
include '../Include/ProprietarioValidate.php';
include '../Dao/ProprietarioDAO.php';

function criar() {
    
    $erros = array();

    if (!ProprietarioValidate::testarNome($_POST['txtNome'])) $erros[] = 'Nome Invalido';
    if (!ProprietarioValidate::testarEstabelecimento($_POST['txtEstabelecimento'])) $erros[] = 'Estabelecimento Invalido';

    if (count($erros) == 0){
        $proprietario = new Proprietario();

        $proprietario->nome = $_POST['txtNome'];
        $proprietario->Estabelecimento = $_POST['txtEstabelecimento'];
        $proprietario->CNPJ = $_POST['txtCNPJ'];


        $ProprietariorDao = new ProprietarioDAO();
        $ProprietarioDao->create($proprietario);

        $_SESSION['nome'] = $proprietario->nome;
        $_SESSION['Estabelecimento'] = $proprietario->Estabelecimento;
        $_SESSION['CNPJ'] = $proprietario->CNPJ;
        header("location:../View/Proprietario/detail.php");
    }
    else{
        $err = serialize($erros);
        $_SESSION['erros'] = $err;
        header("location:../View/Proprietario/error.php");
    }
}
function listar() {
    $ProprietarioDao = new UserDAO();
    $proprietario = $ProprietarioDao->search();

    $_SESSION['Proprietario'] = serialize($proprietario);
    header("location:../View/Proprietario/list.php");

}
function atualizar() {
    echo"Metodo para atualizar";
}
function deletar() {
    $id = $_GET['id'];
    if (isset($id)) {
        $ProprietariorDao = new ProprietarioDAO();
        $ProprietarioDao->delete($id);
        header("location:../../Controller/ProprietarioController.php?operation=consultar");
    }
    else{
        echo 'Proprietario informado não existente';
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