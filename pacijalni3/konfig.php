<?php

class SiteController
{
    public function data()

    {
    return [
        'host' => 'localhost',
        'database' => 'classicmodels',
        'username' => 'testic',
        'password' => '123'
    ];
}
}

class connection
{
    public function __construct(private Router $router = new Router())
    {}

    public function run()
    {
        $route = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        echo $this->router->resolve($route, $method);
    }
}



