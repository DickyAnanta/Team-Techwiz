<?php
$routes->group('pelanggan', ['namespace' => 'App\Modules\Pelanggan\Controllers'], function ($routes) {
    $routes->get('/', 'Pelanggan::main', ['filter' => 'auth']);
    $routes->get('table_main', 'Pelanggan::table_main');
    $routes->get('check_query', 'Pelanggan::check_query');
    $routes->get('edit', 'Pelanggan::edit', ['filter' => 'auth']);
    $routes->post('edit', 'Pelanggan::edit', ['filter' => 'auth']);
    $routes->get('edit/(:any)', 'Pelanggan::edit/$1', ['filter' => 'auth']);
    $routes->post('edit/(:any)', 'Pelanggan::edit/$1', ['filter' => 'auth']);
});
