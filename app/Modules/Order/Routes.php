<?php
$routes->group('order', ['namespace' => 'App\Modules\Order\Controllers'], function ($routes) {
    $routes->get('/', 'Order::order');
    $routes->post('order_proses', 'Order::order_proses');
    $routes->get('metodepembayaran', 'Order::metodepembayaran');
    $routes->get('pembayaran', 'Order::pembayaran');
    $routes->get('selesai/(:any)', 'Order::selesai/$1');
    $routes->get('add', 'Menu::add');
    $routes->get('edit', 'Menu::edit');
});
