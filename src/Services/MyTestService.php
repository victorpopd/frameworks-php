<?php

namespace App\Services;

class MyTestService {
    public function __construct()
    {

    }

    public function decorate(string $target) {
        return sprintf('Prefix %s suffix', $target);
    }
}
