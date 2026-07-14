<?php

namespace Illuminates\Router;

class Router
{
    protected$routes = [
        'GET' => [],
        'POST' => [],  
        'PUT' => [],
        'PATCH' => [],
        'DELETE' => []
    ];

    public function addRoute(string $method, string $route,  $controller, $action, array $middleware = [])
    {
        $this->routes[$method][$route] = compact('controller', 'action', 'middleware');
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function dispatch ($uri , $method)
    {
        $data = $this->routes[$method][$uri];

        $data['action']();
    }

}