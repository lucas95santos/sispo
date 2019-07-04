<?php

namespace sispo;
use sispo\controllers\LandingPageController;

class App {

    const LANDING_PAGE = 'home';

    public function __construct() {
        $this->handleRequest();
    }

    private function handleRequest() {
        $section = isset($_GET['section']) ? $_GET['section'] : self::LANDING_PAGE;

        switch ($section) {
            default:
                new LandingPageController();
                break;
        }
    }
}