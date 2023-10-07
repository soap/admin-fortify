<?php

return [
    'guard' => 'web',
    'middleware' => ['web'],
    'auth_middleware' => 'auth',
    'passwords' => 'users',
    'username' => 'email',
    'email' => 'email',
    'views' => true,
    'home' => '/dashboard',
    'prefix' => '/admin',
    'domain' => null,
    'lowercase_usernames' => false,
    'limiters' => [
        'login' => null,
    ],
    'paths' => [
        'admin.login' => null,
        'admin.logout' => null,
        'password.request' => null,
        'password.reset' => null,
        'password.email' => null,
        'password.update' => null,
    ],
    'redirects' => [
        'admin.login' => null,
        'admin.logout' => null,
        'password-confirmation' => null,
        'password-reset' => null,
    ],

];
