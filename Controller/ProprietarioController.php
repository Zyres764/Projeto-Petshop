<?php
session_start();
include '../Model/Proprietario.php';
include '../Include/ProprietarioValidate.php';
include '../Dao/ProprietarioDAO.php';


function criar() {

    $Proprietario = new Proprietario();
    $Proprietario->nome = $_POST['txtNome'];
        $Proprietario->Estabelecimento = $_POST['txtEstabelecimento'];
        $Proprietario->CNPJ = $_POST['txtCNPJ'];

        $ProprietarioDAO = new ProprietarioDAO();
        $ProprietarioDAO->create($Proprietario);
        //var_dump($Proprietario); die();
    listar();

}
function listar() {
    $ProprietarioDAO = new ProprietarioDAO();
    $usuarios = $ProprietarioDAO->search();
    $_SESSION['users'] = serialize($usuarios);
    header("location:../View/Proprietario/list.php");

}
function atualizar() {
    echo"Metodo para atualizar";
}
function deletar() {
    $id = $_GET['id'];
    if (isset($id)) {
        $ProprietarioDAO = new ProprietarioDAO();
        $ProprietarioDAO->delete($id);
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

?>
