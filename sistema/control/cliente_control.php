<?php
    require_once '../model/cliente_model.php';
    $cliente = new Cliente();

    if(isset($_GET['acao'])) {
        $acao = $_GET['acao'];
    } else {
        $acao = "";
    }

    if($acao == "cadastrar") {
        $cliente->setNome($_POST['nome']);
        $cliente->setEmail($_POST['email']);
        $cliente->setEndereco($_POST['endereco']);
        $cliente->setBairro($_POST['bairro']);
        $cliente->setNumero($_POST['numero']);
        
        $cliente->create();
    } else {
        if($acao == "editar") {
            $cliente->setNome($_POST['nome']);
            $cliente->setEmail($_POST['email']);
            $cliente->setEndereco($_POST['endereco']);
            $cliente->setBairro($_POST['bairro']);
            $cliente->setNumero($_POST['numero']);

            $cliente->update();
        } else {
            if($acao == "excluir") {
                $cliente->setId($_POST['id']);
                $cliente->delete();
            }
        }
    }

    header('Location:../view/cliente_view.php');
?>