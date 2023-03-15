<?php
$routes->group('order', ['namespace' => 'App\Modules\Order\Controllers'], function ($routes) {
    $routes->get('/', 'Order::order');
    $routes->get('metodepembayaran', 'Order::metodepembayaran');
    $routes->get('pembayaran', 'Order::pembayaran');
    $routes->get('selesai', 'Order::selesai');
    $routes->get('add', 'Menu::add');
    $routes->get('edit', 'Menu::edit');
});
