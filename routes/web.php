<?php


use Foundation\Router;


$router = new Router();
$router->get('/', 'App\Controllers\HomeController@index');
$router->get('/about', 'App\Controllers\HomeController@about');
$router->post('/submit', 'App\Controllers\HomeController@submit');
$router->get('/category_create', 'App\Controllers\HomeController@category');
$router->post('/category_store', 'App\Controllers\HomeController@category_store');



