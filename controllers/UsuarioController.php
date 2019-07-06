<?php

namespace sispo\controllers;
use sispo\models\factories\UsuarioFactory;

class UsuarioController extends AbstractController {

    private $usuarioFactory;

    public function __construct() {
        $this->usuarioFactory = new UsuarioFactory();
        $this->handleRequest();
    }
    // actions
    protected function indexAction() {
        // TODO
    }

    private function cadastroAction() {
        require 'views/cadastro.php';
    }

    private function loginAction() {
        require 'views/login.php';
    }

    private function cadastrarAction() {
        $dataNascimento = $_POST['ano'] . '-' . $_POST['mes'] . '-' . $_POST['dia'];

        date_default_timezone_set('America/Sao_Paulo');
        $dataCriacao = date("Y-m-d");

        $values = [
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'data_nascimento' => $dataNascimento,
            'sexo' => $_POST['sexo'],
            'email' => $_POST['email'],
            'senha' => md5($_POST['senha']),
            'data_criacao' => $dataCriacao
        ];

        $this->usuarioFactory->insert($values);
        $this->redirect('usuario', 'login');
    }

    protected function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        switch ($action) {
            case 'login':
                $this->loginAction();
                break;
            case 'cadastro':
                $this->cadastroAction();
                break;
            case 'cadastrar':
                $this->cadastrarAction();
                break;
            default:
                $this->indexAction();
                break;
        }
    }
}