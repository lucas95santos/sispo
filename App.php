<?php

namespace sispo;
use sispo\controllers\LandingPageController;
use sispo\controllers\UsuarioController;

class App {

    const LANDING_PAGE = 'home';
    const USUARIO = 'usuario';

    public function __construct() {
        $this->handleRequest();
    }

    private function handleRequest() {
        $section = isset($_GET['section']) ? $_GET['section'] : self::LANDING_PAGE;

        switch ($section) {
            case self::USUARIO;
                new UsuarioController();
                break;
            default:
                new LandingPageController();
                break;
        }
    }
}