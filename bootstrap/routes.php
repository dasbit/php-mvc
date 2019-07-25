<?php
/**
* Routing
*/
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Main', 'action' => 'index']);
$router->add('logged', ['controller' => 'Main', 'action' => 'logged']);
$router->add('login', ['controller' => 'Main', 'action' => 'login']);
$router->add('{controller}/{action}');

//dd($_SERVER);
$router->dispatch($_SERVER['REQUEST_URI']);