<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/includes/app.php';


use Controllers\LoginController;
use MVC\Router;


$router = new Router();


$router->get('/', [LoginController::class, 'login']);




$router->comprobarRutas();