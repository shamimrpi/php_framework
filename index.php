<?php 

// Define your project's base path.
define('BASE_PATH', __DIR__);

// Autoload Composer dependencies (if you use Composer).
require BASE_PATH . '/vendor/autoload.php';

// database connection code start
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection(require 'config/database.php');
$capsule->setAsGlobal();
$capsule->bootEloquent();
// database connection code end


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