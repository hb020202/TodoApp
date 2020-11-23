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

    public function addTodos(): void
    {
            $query = $this->db->prepare('INSERT INTO `todos` (desc, comp) VALUES (:desc, 0);');
            $active_query = $this->db->prepare($query);
            $active_query->bindParam(":desc", $_POST['desc'], PDO::PARAM_STR);
            $active_query->execute();
        }
    }
