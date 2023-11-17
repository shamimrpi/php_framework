<?php 

use Foundation\Session;
use Foundation\SessionManager;

require_once('config/database.php');
require_once('routes/web.php');

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$action = $router->match($method, $uri);

if ($action) {
    list($controller, $method) = explode('@', $action);
    // Create an instance of the controller and call the method.
    $controllerInstance = new $controller();
    $controllerInstance->$method();
} else {
    // Handle 404 Not Found.
    header("HTTP/1.0 404 Not Found");
    echo '404 - Page Not Found';
}
$sessionManager = new SessionManager();
// echo $sessionManager;
Session::setSessionManager($sessionManager);