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
        if ($this->usuarioFactory->emailExists($_POST['email']) === true) {
            $_SESSION['email_exists'] = [
                'status' => 1,
                'nome' => $_POST['nome'],
                'sobrenome' => $_POST['sobrenome'],
                'dia' => $_POST['dia'],
                'mes' => $_POST['mes'],
                'ano' => $_POST['ano'],
                'sexo' => $_POST['sexo']
            ];
            $this->redirect('usuario', 'cadastro');
        }
        else {
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
            $_SESSION['cadastro_ok'] = [
                'status' => 1,
                'nome' => $_POST['nome']
            ];
            $this->redirect('usuario', 'login');
        }
    }

    private function entrarAction() {
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        if (empty($email) || empty($senha))
            $this->redirect('usuario', 'login');

        $usuario = $this->usuarioFactory->selectByLogin($email, $senha);

        if ($usuario) {
            $_SESSION['usuario_autenticado'] = [
                'authenticated' => 1,
                'id' => $usuario->getId(),
                'nome' => $usuario->getNome()
            ];
            $this->redirect('dashboard', 'index');
        }
        else {
            $_SESSION['login_failed'] = 1;
            $this->redirect('usuario', 'login');
        }
    }

    protected function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        switch ($action) {
            case 'login':
                $this->loginAction();
                break;
            case 'entrar':
                $this->entrarAction();
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