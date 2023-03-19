<?php
$routes->group('beranda', ['namespace' => 'App\Modules\Beranda\Controllers'], function ($routes) {
    $routes->get('/', 'Beranda::main');
    $routes->get('add', 'Menu::add');
    $routes->get('edit', 'Menu::edit');
    $routes->get('edit/(:any)', 'Menu::edit/$1');
    $routes->post('edit', 'Menu::edit');
    $routes->post('edit/(:any)', 'Menu::edit/$1');
});
