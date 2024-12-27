<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Public
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::search');
$routes->get('/cart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');
$routes->get('/images/(:segment)', 'Home::image/$1');
$routes->post('/admin/hapus', 'AdminController::hapusBuku');
$routes->post('/admin/edit', 'AdminController::editBuku');



service('auth')->routes($routes);

// Admin
$routes->group('admin', ['filter' => ['group:admin']], function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('daftar-jilbab.php', 'AdminController::daftarBuku');
    $routes->post('daftar-jilbab.php', 'AdminController::createBuku');
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->post('/books/edit', 'BookController::edit');
    $routes->get('/books/delete/(:num)', 'BookController::delete/$1');
    $routes->get('admin/daftar-buku', 'AdminController::daftarBuku');
    $routes->post('admin/daftar-buku/edit', 'AdminController::editBuku');
    $routes->get('admin/daftar-buku/delete/(:num)', 'AdminController::deleteBuku/$1');
    $routes->post('/admin/hapus', 'AdminController::hapusBuku');
    $routes->post('/admin/edit', 'AdminController::editBuku');
});
