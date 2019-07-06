<?php
session_name ('app');
session_start();

// factories
require 'models/factories/AbstractFactory.php';
require 'models/factories/UsuarioFactory.php';
// controllers
require 'controllers/AbstractController.php';
require 'controllers/LandingPageController.php';
require 'controllers/UsuarioController.php';
// authenticatedControllers
require 'controllers/authenticatedControllers/DashboardUsuarioController.php';
// aplicação principal
require 'App.php';