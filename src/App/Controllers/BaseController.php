<?php namespace App\Controllers;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;

class BaseController {
    
    protected $container;

    public function __construct(ContainerInterface  $ci){
       $this->container = $ci;
    }

    public function query($sql){
        $pdo = $this->container->get('db');
        $query = $pdo->query($sql);
        return $query->fetchAll();
    }

    public function prepare($sql){
        $pdo = $this->container->get('db');
        //$query = $pdo->query($sql);
        //return $query->fetchAll();
    }

    private function makeInsert(){

    }

    private function makeUpdate(){

    }

    public function render(ResponseInterface $response, $template, $data){
        return $this->container->get('view')->render($response, $template, $data);
    }
}