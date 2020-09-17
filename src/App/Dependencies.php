<?php

use Psr\Container\ContainerInterface;

$app->getContainer()->set('db',function(ContainerInterface $ci){
    $config = $ci->get('db_settings');

    $opt= [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];

    $dns = "mysql:host=".$config->DB_HOST.";dbname=".$config->DB_NAME.";charset=".$config->DB_CHARSET."";
    return new PDO($dns, $config->DB_USER, $config->DB_PASS, $opt);
});



$app->getContainer()->set('view',function(ContainerInterface $ci){
    return Slim\Views\Twig::create(__DIR__.'/../../views', ['cache' => __DIR__.'/../../cache']);
});


