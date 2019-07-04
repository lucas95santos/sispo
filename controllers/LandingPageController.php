<?php

namespace sispo\controllers;

class LandingPageController extends AbstractController {

    public function __construct() {
        $this->handleRequest();
    }

    public function indexAction() {
        require 'views/landing-page.php';
    }

    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        switch ($action) {
            default:
                $this->indexAction();
                break;
        }
    }
}