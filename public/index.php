<?php

use Config\Database\Database;
use core\Router\Router;
use src\Controller\TaskController;
use src\Model\TaskModel;

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);
