<?php

namespace App\Controllers;

use App\Services\MyOtherService;
use App\Services\MyTestService;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Services\RedisAdapter;

class MyController
{
    public function __construct(private MyOtherService $service)
    {
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write('<h1>Altceva new</h1>' . $this->service->getMyName());

        return $response;
    }

    public function route1(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write('<h1>Route 1 class</h1>');

        return $response;
    }

}