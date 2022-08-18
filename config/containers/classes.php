<?php

use App\Controllers\MyController;
use App\Interfaces\CacheInterface;
use App\Services\RedisAdapter;

return [
    'App\*\*' => DI\autowire('App\*\*'),
    'cache.engine' => function() {
        return getenv('CACHE_ENGINE');
    },
    CacheInterface::class => function(containerInterface $container) {
        if($container->get('cache.engine')== 'redis'){
            return $container->get(RedisAdapter::class);
        }
        return $container->get(MemcacheAdapter::class);
    }
];
