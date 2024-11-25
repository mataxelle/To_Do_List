<?php

namespace src\Model;

use config\Database\Database;

class TaskModel extends Database
{
    public function getAllTasks()
    {
        // Instancier la classe
        $db = new Database();

        $response = $db->query('SELECT * FROM task');
        //var_dump($response);
        return $response->fetchAll();
    }
}
