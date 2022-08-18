<?php

namespace App\Services;

use App\Services\MyOtherService as ServicesMyOtherService;
use DI\Annotation\Inject;

class MyOtherService
{
    /** @Inject("cache.engine") */
    private string $test;

    public function __construct(private MyTestService $service)
    {
    }

    public function getMyName()
    {
        return $this->service->decorate(self::class);
    }
}
