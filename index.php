<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}','getHello');
$app->post('/hello/{name}','getHello');
$app->run();

function getHello (Request $request, Response $response, array $args)
{
	$name = $args['name'];
	$response->getBody()->write("Hello, $name");
	return $response;
}