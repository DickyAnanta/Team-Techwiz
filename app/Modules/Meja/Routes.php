<?php
$routes->group('meja', ['namespace' => 'App\Modules\Meja\Controllers'], function ($routes) {
    $routes->get('/', 'Meja::main');
    $routes->get('table_main', 'Meja::table_main');
    $routes->get('check_query', 'Meja::check_query');
    $routes->get('edit', 'Meja::edit');
    $routes->post('edit', 'Meja::edit');
    $routes->get('edit/(:any)', 'Meja::edit/$1');
    $routes->post('edit/(:any)', 'Meja::edit/$1');
});
