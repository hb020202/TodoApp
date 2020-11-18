<?php
namespace App\Factories;

use App\Controllers\HomeController;
use Psr\Container\ContainerInterface;
class HomeControllerFactory
{
    public function __invoke(ContainerInterface $container): HomeController
    {
        $renderer = $container->get('renderer');
        return new HomeController($renderer);
    }
}