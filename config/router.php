<?php

use App\Controllers\MyController;
use League\Route\Strategy\ApplicationStrategy;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Controllers\RedisController;

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$router = new League\Route\Router;

$strategy = new ApplicationStrategy();
$strategy->setContainer($container);
$router->setStrategy($strategy);

// map a route
$router->map('GET', '/ceva', [MyController::class, 'handle']);

$router->group('/api', function (\League\Route\RouteGroup $route) {
    $route->map('GET', '/route1', [MyController::class, 'route1']);
    $route->map('GET', '/route2', [MyController::class, 'route2']);
    $route->get('/redis/set/{value}', [RedisController::class, 'setRedis']);
    $route->get('/redis/get', [RedisController::class, 'getRedis']);
});
