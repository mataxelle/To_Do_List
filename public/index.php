<?php

// Activer le rapport d'erreurs pour le développement
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use core\Router;

// Charger les variables du fichier .env
$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);
