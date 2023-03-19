<?php
$routes->group('menu', ['namespace' => 'App\Modules\Menu\Controllers'], function ($routes) {
    $routes->get('/', 'Menu::main', ['filter' => 'auth']);
    $routes->get('table_main', 'Menu::table_main');
    $routes->get('check_query', 'Menu::check_query');
    $routes->get('detailed_menu', 'Menu::detailed_menu');
    $routes->get('edit', 'Menu::edit', ['filter' => 'auth']);
    $routes->post('edit', 'Menu::edit', ['filter' => 'auth']);
    $routes->get('edit/(:any)', 'Menu::edit/$1', ['filter' => 'auth']);
    $routes->post('edit/(:any)', 'Menu::edit/$1', ['filter' => 'auth']);
    $routes->get('v2', 'Menu::menu');
});
