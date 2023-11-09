<?php


use Foundation\Router;


$router = new Router();
$router->get('/', 'App\Controllers\HomeController@index');
$router->get('/about', 'App\Controllers\HomeController@about');
$router->post('/submit', 'App\Controllers\HomeController@submit');


