<?php

namespace App\Interfaces;

interface CacheInterface
{
    public function retrieveData(string $key): ?string;

    public function storeData(string $key, string $value): void;

    public function removeData(string $key): void;
}