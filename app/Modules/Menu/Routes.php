<?php
$routes->group('menu', ['namespace' => 'App\Modules\Menu\Controllers'], function ($routes) {
    $routes->get('/', 'Menu::main');
    $routes->get('table_main', 'Menu::table_main');
    $routes->get('check_query', 'Menu::check_query');
    $routes->get('edit', 'Menu::edit');
    $routes->post('edit', 'Menu::edit');
    $routes->get('edit/(:any)', 'Menu::edit/$1');
    $routes->post('edit/(:any)', 'Menu::edit/$1');
    $routes->get('v2', 'Menu::menu');
});
