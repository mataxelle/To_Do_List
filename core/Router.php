<?php

namespace core;

use src\Controller\TaskController;

class Router
{
    public function dispatch($uri)
    {
        echo "Requested URI: $uri";
        $uri = trim($uri, '/');
        $controller = new TaskController;

        if ($uri === '') {
            ($controller)->allTasks();
        } elseif ($uri === 'add') {
            ($controller)->add();
        } elseif (preg_match('/update\/(\d+)/', $uri, $matches)) {
            ($controller)->update($matches[1]);
        } elseif (preg_match('/delete\/(\d+)/', $uri, $matches)) {
            ($controller)->delete($matches[1]);
        } else {
            echo '404 Not Found';
        }
    }
}
