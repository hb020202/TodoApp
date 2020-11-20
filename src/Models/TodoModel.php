<?php
namespace App\Models;
class TodoModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTodos(): array
    {
        $query = $this->db->prepare('SELECT `desc` FROM `todos`');
        $query->execute();
        return $query->fetchAll();
    }

    public function getCompTodos(): array
    {
        $query = $this->db->prepare('SELECT `desc` FROM `todos` WHERE `comp`=1;');
        $query->execute();
        return $query->fetchAll();
    }

    public function getUncompTodos(): array
    {
        $query = $this->db->prepare('SELECT `desc` FROM `todos` WHERE `comp`=0;');
        $query->execute();
        return $query->fetchAll();
    }

    public function addTodos(): array
    {
        $query = $this->db->prepare('SELECT * FROM `todos`');
        $query->execute();
        return $query->fetchAll();
    }
}