<?php 

namespace Foundation;

class Router {
    protected $routes = [];

    public function get($path, $action) {
        $this->routes['GET'][$path] = $action;
    }

    public function post($path, $action) {
        $this->routes['POST'][$path] = $action;
    }

    public function match($method, $uri) {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->routes[$method][$uri];
        }
        return null;
    }
}