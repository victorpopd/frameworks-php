<?php

namespace App\Services;

use App\Interfaces\CacheInterface;
use Redis;


class RedisAdapter implements CacheInterface
{
    protected Redis $redis;

    public function __construct()
    {
        $this->redis = new Redis();
        $this->redis->connect('redis', 6379);
    }

    public function retrieveData(string $key): ?string
    {
        $result = $this->redis->get($key);
        if ($result !== false) {
            return $result;
        }

        return null;
    }

    public function storeData(string $key, string $value): void
    {
        $this->redis->set($key, $value);
    }

    public function removeData(string $key): void
    {
        $this->redis->del($key);
    }
}