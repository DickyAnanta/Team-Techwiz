<?php
$routes->group('menu', ['namespace' => 'App\Modules\Menu\Controllers'], function ($routes) {
    $routes->get('/', 'Menu::index');
    $routes->get('add', 'Menu::add');
    $routes->get('edit', 'Menu::edit');
    $routes->get('edit/(:any)', 'Menu::edit/$1');
    $routes->post('edit', 'Menu::edit');
    $routes->post('edit/(:any)', 'Menu::edit/$1');
    $routes->get('v2', 'Menu::menu');
});
