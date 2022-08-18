<?php

namespace App\Controllers;

use App\Services\MyOtherService;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Services\RedisAdapter;

class RedisController
{
    public function __construct(private MyOtherService $service, private RedisAdapter $redis)
    {

    }

    public function setRedis(ServerRequestInterface $request, array $args): ResponseInterface
    {
        $this->redis->storeData('fc', $args['value']);

        $response = new Response();
        $response->getBody()->write('<h1>Value set</h1>');

        return $response;
    }

    public function getRedis(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write('<h1>' . $this->redis->retrieveData('fc') . '</h1>');
        return $response;
    }
}