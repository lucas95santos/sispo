<?php

namespace sispo\controllers;

class LandingPageController extends AbstractController {

    public function __construct() {
        $this->handleRequest();
    }

    protected function indexAction() {
        require 'views/landing-page.php';
    }

    protected function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        switch ($action) {
            default:
                $this->indexAction();
                break;
        }
    }
}