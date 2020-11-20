<?php
namespace App\Factories;

use App\Models\TodoModel;
class TodoModelFactory
{
    public function __invoke(\PDO $db): TodoModel
    {
        return new TodoModel($db);

    }

}
