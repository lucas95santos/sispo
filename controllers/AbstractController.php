<?php

namespace sispo\controllers;

abstract class AbstractController {

    public function redirect($section, $action) {
        ob_get_clean();
        header('location: index.php?section='.$section.'&action='.$action);
        exit();
    }

    abstract public function indexAction();

    abstract public function handleRequest();
}