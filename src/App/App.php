<?php
// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;

require __DIR__ . '/../../vendor/autoload.php';

//$container = new \DI\Container();
$container = new Container();
AppFactory::setContainer($container);

$app = AppFactory::create();

require __DIR__ . './Routes.php';
require __DIR__ . './Configs.php';
require __DIR__ . './Dependencies.php';

$app->add(Slim\Views\TwigMiddleware::createFromContainer($app));

$app->run();