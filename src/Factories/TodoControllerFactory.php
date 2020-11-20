<?php
namespace App\Factories;
use App\Models\TodoModel;
use Psr\Container\ContainerInterface;
class TodoControllerFactory
{
    public function __invoke(ContainerInterface $container): TodoModel
    {
        $db = $container->get('PDO');
        return new TodoModel($db);
    }
}
