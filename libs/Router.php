<?php

namespace Core;

class Router
{
    private static array $routes = [];

    public static function get(string $route, callable|array $callback): void
    {
        self::$routes['GET'][$route] = $callback;
    }

    public function resolve(string $route, string $method): string
    {
        $callback = self::$routes[$method][$route];

        if ($callback === null) {
            return '404 - Page not found';
        }

        if (is_array($callback)) {
           
            $controller = new $callback[0]();

            $response = $controller->{$callback[1]}();
        } else {
         
            $response = $callback();
        }

        if (is_array($response)){
            return json_encode($response);
        }

        return $response;
    }
}