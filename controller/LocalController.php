<?php

namespace Henri\controller;

use Henri\model\Local;

class LocalController
{
    public function index()
    {
        $Local = new Local();
        $local = $Local->getAll();

        require DIR . 'view/_templates/header.php';
        require DIR . 'view/local/index.php';
        require DIR . 'view/_templates/footer.php';
    }

    public function adicionar()
    {
        require DIR . 'view/_templates/header.php';
        require DIR . 'view/local/adicionar.php';
        require DIR . 'view/_templates/footer.php';
    }

    public function inserirDados()
    {
        if (isset($_POST)) {
            $Local = new Local();

            $retorno =
                $Local->insert(
                    $_POST['estado'],
                    $_POST['cidade'],
                    $_POST['bairro']
                );

            if ($retorno) {
                header('location:' . URL . '/local#sucesso');
            } else {
                header('location:' . URL . '/local#erro');
            }
        }
    }

    public function editar($id)
    {
        $Local = new Local();
        $local = $Local->get($id);

        require DIR . 'view/_templates/header.php';
        require DIR . 'view/local/editar.php';
        require DIR . 'view/_templates/footer.php';
    }

    public function editarDados($id)
    {
        if (isset($_POST)) {
            $Local = new Local();

            $retorno =
                $Local->update(
                    $id,
                    $_POST['estado'],
                    $_POST['cidade'],
                    $_POST['bairro']
                );

            if ($retorno == 1) {
                header('location: ' . URL . '/local/editar/' . $id . '#sucesso');
            } else {
                header('location: ' . URL . '/local/editar/' . $id . '#erro');
            }
        }
    }

    public function ajaxGetDetalhes($codigo)
    {
        $Local = new Local();
        $detalhes = $Local->getDetalhesImovel($codigo);

        echo json_encode($detalhes);
    }

    public function consultar($id)
    {
        $Local = new Local();
        $local = $Local->get($id);

        $imovel = $Local->getImovel($local['cidade'], $local['bairro']);

        require DIR . 'view/_templates/header.php';
        require DIR . 'view/local/consultar.php';
        require DIR . 'view/_templates/footer.php';
    }

    public function apagar($id)
    {
        $Local = new Local();

        if (isset($id)) {
            $retorno = $Local->delete($id);
        }

        if ($retorno == 1) {
            header('location: ' . URL . '/local#sucesso');
        } else {
            header('location: ' . URL . '/local#erro');
        }
    }
}