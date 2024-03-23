<?php
$routes->group('meja', ['namespace' => 'App\Modules\Meja\Controllers'], function ($routes) {
    $routes->get('/', 'Meja::main', ['filter' => 'auth']);
    $routes->get('v2', 'Meja::meja');
    $routes->get('table_main', 'Meja::table_main');
    $routes->get('check_query', 'Meja::check_query');
    $routes->get('edit', 'Meja::edit', ['filter' => 'auth']);
    $routes->post('edit', 'Meja::edit', ['filter' => 'auth']);
    $routes->get('edit/(:any)', 'Meja::edit/$1', ['filter' => 'auth']);
    $routes->post('edit/(:any)', 'Meja::edit/$1', ['filter' => 'auth']);
});
