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
        $date = (new DateTime())->format('Y-m-d H:i:s');

        $sql = "INSERT INTO task (title, content, status, createdAt, updatedAt)
                VALUES (:title, :content, :status, :createdAt, :updatedAt)";

        $newTask = $this->db->prepare($sql);
        $newTask->execute([
            ':title' => $title,
            ':content' => $content,
            ':status' => $status,
            ':createdAt' => $date,
            ':updatedAt' => $date
        ]);
        return $newTask;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM task
                WHERE id = :id";

        $task = $this->db->prepare($sql);
        $task->execute([
            ':id' => $id,
        ]);
    }
}
