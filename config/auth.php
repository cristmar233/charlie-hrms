<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'emp_acc',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'emp_acc',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'emp_acc',
            'hash' => false,
        ],
    ],

    'providers' => [
        'emp_acc' => [
            'driver' => 'eloquent',
            'model' => App\Models\EmpAcc::class,
        ],
    ],

    'passwords' => [
        'emp_acc' => [
            'provider' => 'emp_acc',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
