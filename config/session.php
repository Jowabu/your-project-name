<?php

return [
    'driver' => env('SESSION_DRIVER', 'file'),
    
    'lifetime' => 120,

    'expire_on_close' => false,

    'encrypt' => false,

    'files' => storage_path('framework/sessions'),

    'connection' => 'mysql',

    'table' => 'sessions',

    'store' => null,

    'lottery' => [2, 100],

    'cookie' => env(
        'SESSION_COOKIE',
        str_replace(' ', '_', strtolower(env('APP_NAME', 'laravel'))).'_session'
    ),
];
