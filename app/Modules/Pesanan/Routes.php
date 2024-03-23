<?php
$routes->group('pesanan', ['namespace' => 'App\Modules\Pesanan\Controllers'], function ($routes) {
    $routes->get('/', 'Pesanan::main', ['filter' => 'auth']);
    $routes->get('pesanan', 'Pesanan::pesanan');
    $routes->get('check_query', 'Pesanan::check_query');
    $routes->get('edit', 'Pesanan::edit', ['filter' => 'auth']);
    $routes->post('edit', 'Pesanan::edit', ['filter' => 'auth']);
    $routes->get('edit/(:any)', 'Pesanan::edit/$1', ['filter' => 'auth']);
    $routes->post('edit/(:any)', 'Pesanan::edit/$1', ['filter' => 'auth']);
});
