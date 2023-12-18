<?php

namespace Core;

class Router {
    public $routes = [];

    public function route(string $uri)
    {
        foreach ($this->routes as $route) {
            if ($uri === $route['uri']) {
                require controller_path($route['controller']);
                exit();
            }
        }
        abort();
    }

    public function add(string $uri, string $controller, string $method) 
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get(string $uri, string $controller)
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post(string $uri, string $controller)
    {
          $this->add($uri, $controller, 'POST');
    }
}
