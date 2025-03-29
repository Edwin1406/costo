<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/includes/app.php';

use Controllers\InicioController;
use MVC\Router;


$router = new Router();

echo "<h1>Hola Mundo</h1>";
// $router->get('/', [InicioController::class, 'index']);




$router->comprobarRutas();