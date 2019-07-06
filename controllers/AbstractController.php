<?php

namespace sispo\controllers;

abstract class AbstractController {

    protected function redirect($section, $action) {
        ob_get_clean();
        header('location: index.php?section='.$section.'&action='.$action);
        exit();
    }

    abstract protected function indexAction();

    abstract protected function handleRequest();
}