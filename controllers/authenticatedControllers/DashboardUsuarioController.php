<?php

namespace sispo\controllers\authenticatedControllers;
use sispo\controllers\AbstractController;

class DashboardUsuarioController extends AbstractController {

    public function __construct() {
        $this->handleRequest();
    }

    protected function indexAction() {
        require 'views/authenticated/dashboard-usuario.php';
    }

    private function logoutAction() {
        unset ($_SESSION['usuario_autenticado']);
        $this->redirect ('usuario', 'login');
    }

    protected function handleRequest() {
        if (!isset($_SESSION['usuario_autenticado']) || $_SESSION['usuario_autenticado']['authenticated'] === 0)
            $this->redirect ('usuario', 'login');

        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        switch ($action) {
            case 'logout':
                $this->logoutAction();
                break;
            default:
                $this->indexAction();
                break;
        }
    }
}