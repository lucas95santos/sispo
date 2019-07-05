<?php

namespace sispo\controllers;

class UsuarioController extends AbstractController {

    public function __construct() {
        $this->handleRequest();
    }

    public function indexAction() {
        // TODO
    }

    public function cadastroAction() {
        require 'views/cadastro.php';
    }

    public function loginAction() {
        require 'views/login.php';
    }

    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        switch ($action) {
            case 'login':
                $this->loginAction();
                break;
            case 'cadastro':
                $this->cadastroAction();
                break;
            default:
                $this->indexAction();
                break;
        }
    }
}