<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors','On');

require 'vendor/autoload.php';
require 'config/constants.php';
require 'config/config.php';

$app = new \Slim\App(["settings" => $config]);

$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("resources/views/");

require 'app/routes.php';


/*$app->get('/hola/{name}', function($request,$response,$args){
    return $response->write("Hola ".$args['name']);
});*/

$app->run();