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

    public function add() {}

    public function update() {}

    public function delete() {}
}
