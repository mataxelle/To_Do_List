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
        } else {
            include '../src/vue/add.php';
        }
    }

    public function update() {}

    public function delete() {}
}
