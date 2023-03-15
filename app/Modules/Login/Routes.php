<?php
$routes->group('login', ['namespace' => 'App\Modules\Login\Controllers'], function ($routes) {
    $routes->get('/', 'Login::login_v1');
    $routes->post('auth', 'Login::auth');
    $routes->get('logout', 'Login::logout');
});
