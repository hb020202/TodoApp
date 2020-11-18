<?php
namespace App\Factories;

use App\Controllers\CompletedController;
use Psr\Container\ContainerInterface;
class CompletedControllerFactory
{
    public function __invoke(ContainerInterface $container): CompletedController
    {
        $renderer = $container->get('renderer');
        return new CompletedController($renderer);
    }
}