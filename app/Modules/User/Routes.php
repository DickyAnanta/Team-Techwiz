<?php
$routes->group('user', ['namespace' => 'App\Modules\User\Controllers'], function ($routes) {
    $routes->get('/', 'User::index');
    $routes->get('add', 'User::add');
    $routes->get('edit', 'User::edit');
    $routes->post('edit', 'User::edit');
});
