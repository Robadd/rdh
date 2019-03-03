<?php

class RouteHandler
{
    private $routes;

    public function __construct()
    {
        $routes = array();
    }

    public function add($path, $className)
    {
        $routeHandler = new ReflectionClass($className);
        $routeDefinition = array($path => $routeHandler);
        array_push($routeDefinition);
    }

    public function handle($path, $method, $params = null, $data = null)
    {
        if ($path == null || $method == null) {
            throw new InvalidArgumentException("");
        }
    }
}
