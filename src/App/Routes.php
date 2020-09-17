<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;

$app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hello world!");
        return $response;
});

$app->get('/citas', 'App\Controllers\CitasController:getAll');

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/citas','App\Controllers\CitasController:getAll');
    $group->get('/citas/home','App\Controllers\CitasController:home');
});