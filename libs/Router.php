<?php

namespace Core;

class Router
{
    private static array $routes = [];

    public static function get(string $route, callable $callback): void
    {
        self::$routes['GET'][$route] = $callback;
    }

    public function resolve(string $route, string $method): string
    {
        $callback = self::$routes[$method][$route];

        if ($callback === null) {
            return '404 - Page not found';
        }

        $response = $callback();

        if (is_array($response)){
            return json_encode($response);
        }

        return $response;
    }
}