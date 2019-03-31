<?php
//This bootstrap.php
require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/AbstractController.php';
require_once 'controllers/MainController.php';
require_once 'controllers/ArticlesController.php';
require_once 'core/Router.php';

Router::start();
?>