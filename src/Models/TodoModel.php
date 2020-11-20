<?php
namespace App\Models;
class TodoModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getBlogs(): array
    {
        $query = $this->db->prepare('SELECT * FROM `todos`');
        $query->execute();
        return $query->fetchAll();
    }
}