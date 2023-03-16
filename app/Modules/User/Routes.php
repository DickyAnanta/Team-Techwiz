<?php
$routes->group('user', ['namespace' => 'App\Modules\User\Controllers'], function ($routes) {
    $routes->get('/', 'User::main');
    $routes->get('table_main', 'User::table_main');
    $routes->get('check_query', 'User::check_query');
    $routes->get('edit', 'User::edit');
    $routes->post('edit)', 'User::edit');
    $routes->get('edit/(:any)', 'User::edit/$1');
    $routes->post('edit/(:any)', 'User::edit/$1');
});
