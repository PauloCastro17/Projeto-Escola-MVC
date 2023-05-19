<?php

require __DIR__.'/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE, ":");

$router->namespace("Source\Controllers")->group(null);


//ROTAS PRINCIPAIS - USER E ADM

$router->get("/", "HomeController:home");


//ROTA ERRORS
$router->group("Error");
$router->get("/{errcode}", "ErrorController:notFound");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/Error/{$router->error()}");
}