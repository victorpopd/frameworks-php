<?php

use App\Controllers\MyController;

return [
    'App\*\*' => DI\autowire('App\*\*'),
    'db.host' => function() {
        return 'my db host';
    },

];
