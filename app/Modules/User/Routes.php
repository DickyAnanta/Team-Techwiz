<?php
$routes->group('user', ['namespace' => 'App\Modules\User\Controllers'], function ($routes) {
    $routes->get('/', 'User::main', ['filter' => 'auth']);
    $routes->get('table_main', 'User::table_main');
    $routes->get('check_query', 'User::check_query');
    $routes->get('edit', 'User::edit', ['filter' => 'auth']);
    $routes->post('edit', 'User::edit', ['filter' => 'auth']);
    $routes->get('edit/(:any)', 'User::edit/$1', ['filter' => 'auth']);
    $routes->post('edit/(:any)', 'User::edit/$1', ['filter' => 'auth']);
});
