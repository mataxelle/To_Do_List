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

    public function getOneTask($id)
    {
        $sql = "SELECT * FROM task WHERE id = :id";

        $task = $this->db->prepare($sql);
        $task->execute([
            ':id' => $id,
        ]);
        return $task->fetch();
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

    public function update($id, $title, $content, $status)
    {
        $date = (new DateTime())->format('Y-m-d H:i:s');

        $sql = "UPDATE task
                SET title = :title, content = :content, status = :status, updatedAt = :updatedAt
                WHERE id = :id";

        $task = $this->db->prepare($sql);
        $task->execute([
            ':title' => $title,
            ':content' => $content,
            ':status' => $status,
            ':updatedAt' => $date,
            ':id' => $id
        ]);
        return $task;
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
