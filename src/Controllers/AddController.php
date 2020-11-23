<?php
namespace App\Controllers;

use App\Models\TodoModel;
use Slim\Views\PhpRenderer;

class AddController
{
    private $renderer;
    private $model;

    public function __construct(TodoModel $model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
        $app->post('/', function ($request, $response, $args) use ($container) {
            var_dump($request->getParsedBody());
        });

    }
    public function __invoke($request, $response, $args)
    {
$response->withHeader('Location','/');
    }
}