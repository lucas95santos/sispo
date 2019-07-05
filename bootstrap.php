<?php
session_name ('app');
session_start();

// factories
// controllers
require 'controllers/AbstractController.php';
require 'controllers/LandingPageController.php';
require 'controllers/UsuarioController.php';
// aplicação principal
require 'App.php';