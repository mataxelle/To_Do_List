<?php

namespace src\Controller;

use src\Model\TaskModel;

class TaskController
{
    private $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    public function allTasks()
    {
        $tasks = $this->taskModel->getAllTasks();
        include '../src/Vue/index.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->taskModel->add($_POST['title'], $_POST['content']);
            header('Location: /');
            exit();
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (filter_var($id, FILTER_VALIDATE_INT)) {
                $this->taskModel->delete($id);
                header('Location: /');
                exit();
            } else {
                echo 'Invalidated ID.';
            }
        } else {
            echo 'Unauthorized method.';
        }
    }
}
