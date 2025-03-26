<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/front', 'Home::front');
$routes->get('/produk', 'Home::produk');
$routes->get('/kategori', 'Home::kategori');
$routes->get('/kategori/alat_tulis', 'Home::alat_tulis');
$routes->get('/kategori/pakaian', 'Home::pakaian');
$routes->get('/kategori/pertukangan', 'Home::pertukangan');
$routes->get('/kategori/elektronik', 'Home::elektronik');
$routes->get('/kategori/snack', 'Home::snack');
