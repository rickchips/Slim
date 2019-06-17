<?php

require dirname(__DIR__) . '/vendor/autoload.php';
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

$app = new App();

//Création d'une route :
$app->get('/homepage', function (ServerRequestInterface $request, ResponseInterface $response)
{
    $response = $response->getBody()->write('<h1>Bonjour</h1>');
    return $response;
});

$app->run();