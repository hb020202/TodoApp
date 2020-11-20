<?php
namespace App\Controllers;

use App\Models\TodoModel;
use Slim\Views\PhpRenderer;

class CompletedController
{
    private $renderer;
    private $model;

    public function __construct(TodoModel $model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
    }
    public function __invoke($request, $response, $args)
    {
        $data = $this->model->getCompTodos();
        return $this->renderer->render($response, "comp.php", $data);
    }
}