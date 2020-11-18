<?php
namespace App\Controllers;

use Slim\Views\PhpRenderer;

class HomeController
{
    private $renderer;

    public function __construct(PhpRenderer $renderer)
    {
        $this->renderer = $renderer;
    }
    public function __invoke($request, $response, $args)
    {
        return $this->renderer->render($response, "index.php", $args);
    }
}