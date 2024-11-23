<?php

namespace App\Model\TaskModel;

use Config\Database\Database;

class TaskModel extends Database
{
    public function getAllTasks()
    {
        // Instancier la classe
        $db = new Database();

        $response = $db->query('SELECT * FROM task');
        return $response->fetchAll();
    }
}
