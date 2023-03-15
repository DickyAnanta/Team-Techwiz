<?php
$routes->group('login', ['namespace' => 'App\Modules\Login\Controllers'], function ($routes) {
    $routes->get('/', 'Login::index');
    $routes->get('logout', 'Login::logout');
});
