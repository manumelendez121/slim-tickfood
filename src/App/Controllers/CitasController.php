<?php namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\BaseController;

class CitasController extends BaseController {
    
    public function home(Request $request, Response $response, $args){
        $data = $this->query("SELECT * FROM tkempleado");
        return $this->render($response, "empleados/empleados.html", ["empleados" => $data, "title" => 'Empleados']);
    }

    public function getAll(Request $request, Response $response, $args){
        $data = $this->query("SELECT * FROM tkempleado");
        $response->getBody()->write(json_encode($data));
        $response->withHeader('Content-Type','application/json')->withStatus(201);
        return $response;
    }
}