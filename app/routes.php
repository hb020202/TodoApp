<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'HomeController');
    $app->post('/', 'HomeController');
    $app->get('/comp/', 'CompletedController');

//        function ($request, $response, $args) use ($container) {
//        $renderer = $container->get('renderer');
//        return $renderer->render($response, "index.php", $args);
//    }







//    $app->get('/snacks', function ($request, $response, $args) use ($container) {
//        $renderer = $container->get('renderer');
//        return $renderer->render($response, "snacks.php", $args);
//    });
//
//    $app->get('/snaacks[/{snack}]', function ($request, $response, $args) use ($container) {
//        var_dump($args);
//        $renderer = $container->get('renderer');
//        return $renderer->render($response, "snacks.php", $args);
//    });
//
//    $app->get('/books/{book}', function ($request, $response, $args) use ($container) {
//        $renderer = $container->get('renderer');
//        return $renderer->render($response, "index.php", $args);
//    });
//
//    $app->post('/form-example', function ($request, $response, $args) use ($container) {
//
//        var_dump($request->getParsedBody());
//    });
};
