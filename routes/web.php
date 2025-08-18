<?php
require_once __DIR__ . '/../app/Core/Router.php';

use App\Controllers\PostController;
use App\Controllers\HomeController;
use App\Core\Router;


$router=new Router();

$router->get('/', 'PostController@index');
$router->get('/home', 'HomeController@index');


    