<?php

namespace src\Model;

use config\Database\Database;
use DateTime;

class TaskModel extends Database
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database;
    }

    public function getAllTasks()
    {
        $response = $this->db->query('SELECT * FROM task');
        return $response->fetchAll();
    }

    public function add($title, $content)
    {
        $status = 'pending';
        $date = (new DateTime())->format('Y-m-d h:i:s');

        $newTask = $this->db->prepare("INSERT INTO task (title, content, status, createdAt, updatedAt) VALUES (:title, :content, '$status', '$date', '$date')");
        $newTask->execute([':title' => $title, ':content' => $content]);
        return $newTask;
    }

    public function update() {}

    public function delete() {}
}
