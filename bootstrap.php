<?php
session_name ('app');
session_start();

// factories
// controllers
require 'controllers/AbstractController.php';
require 'controllers/LandingPageController.php';
// aplicação principal
require 'App.php';