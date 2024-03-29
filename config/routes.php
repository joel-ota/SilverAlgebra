<?php

use App\Controller\GenreController;
use App\Controller\MediaController;
use App\Controller\SiteController;
use App\Controller\CustomersController;
use Core\Router;

Router::get('/about', function(){
    return 'About';
});

Router::get('/contact', [SiteController::class, 'contact']);

Router::get('/genres', [GenreController::class, 'index']);

Router::get('/media', [MediaController::class, 'index']);

Router::get('/media/home', [MediaController::class, 'home']);

Router::get('/customers', [CustomersController::class, 'index']);

Router::get('/customers/home', [CustomersController::class, 'index']);

Router::get('/bok', function()
{
    return 'bok';
}
);