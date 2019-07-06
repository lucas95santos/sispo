<?php

namespace sispo;
use sispo\controllers\LandingPageController;
use sispo\controllers\UsuarioController;
// authenticated
use sispo\controllers\authenticatedControllers\DashboardUsuarioController;

class App {

    const LANDING_PAGE = 'home';
    const USUARIO = 'usuario';
    // authenticated
    const DASHBOARD_USUARIO = 'dashboard';

    public function __construct() {
        $this->handleRequest();
    }

    private function handleRequest() {
        $section = isset($_GET['section']) ? $_GET['section'] : self::LANDING_PAGE;

        switch ($section) {
            case self::USUARIO;
                new UsuarioController();
                break;
            case self::DASHBOARD_USUARIO;
                new DashboardUsuarioController();
                break;
            default:
                new LandingPageController();
                break;
        }
    }
}