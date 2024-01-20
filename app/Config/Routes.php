<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->add('/login/verify', 'Home::verify');
$routes->get('/login/forgot', 'Home::forgot');
$routes->get('/logout', 'Home::logout');
$routes->get('/product', 'Home::product');
$routes->get('/signup', 'Home::signup');
$routes->add('/signup/new', 'Home::regist');
$routes->get('/terms', 'Home::terms');
$routes->add('/wishlist/add', 'Home::favorit');
$routes->group('', ['filter' => 'storeFilter'], static function($routes){
    $routes->get('/akun', 'Home::client');
    $routes->get('/akun/pesan', 'Home::pesan');
    $routes->get('/akun/bayar', 'Home::bayar');
    $routes->get('/beli', 'Home::beli');
    $routes->get('/keranjang', 'Home::keranjang');
    $routes->get('/wishlist', 'Home::wishlist');
});

$routes->get('/adm/login', 'Admin::login');
$routes->add('/logging', 'Admin::masuk');
$routes->get('/outing', 'Admin::keluar');

$routes->group('', ['filter' => 'adminFilter'], static function($routes){
    $routes->get('/adm', 'Dashboard::dashboard');
    $routes->get('/adm/stocks', 'Stocks::stocks');
    $routes->get('/adm/inventory', 'Inventory::inventory');
    $routes->get('/adm/order', 'Order::order');
    $routes->get('/adm/balance', 'Balance::balance');
    $routes->get('/adm/settings', 'Admin::settings');

    $routes->get('/adm/dash/penilaian', 'Dashboard::penilaian');
    $routes->get('/adm/dash/penilaian/detail', 'Dashboard::penilaianDetail');
    $routes->get('/adm/dash/pesan', 'Dashboard::pesan');
    $routes->get('/adm/dash/pesan/detail', 'Dashboard::pesanDetail');
    $routes->get('/adm/dash/post', 'Dashboard::post');
    $routes->get('/adm/dash/post/detail', 'Dashboard::postDetail');

    $routes->get('/adm/stocks/in', 'Stocks::stockin');
    $routes->get('/adm/stocks/out', 'Stocks::stockout');
    $routes->get('/adm/stocks/out/product', 'Stocks::product');
    $routes->get('/adm/stocks/retur', 'Stocks::retur');

    $routes->get('/adm/inventory/edit', 'Inventory::edit');
    $routes->get('/adm/inventory/edit/gambar', 'Inventory::editGambar');
    $routes->get('/adm/inventory/tambah', 'Inventory::tambah');
    $routes->add('/adm/inventory/tambah/method', 'Inventory::invTambah');

    $routes->get('/adm/order/detail', 'Order::orderDetail');
    $routes->get('/adm/order/pesanan', 'Order::pesanan');
    $routes->get('/adm/order/pesanan/konfirmasi', 'Order::pesanKonfirm');
    $routes->get('/adm/order/pembayaran', 'Order::bayar');
    $routes->get('/adm/order/dikirim', 'Order::kirim');
    $routes->get('/adm/order/diterima', 'Order::terima');
    $routes->get('/adm/order/diterima/detail', 'Order::terimaDetail');

    $routes->get('/adm/balance/rekap', 'Balance::rekap');
    $routes->get('/adm/balance/penjualan', 'Balance::penjualan');
    $routes->get('/adm/balance/jual_detail', 'Balance::detail');
    $routes->get('/adm/balance/margin', 'Balance::margin');
    $routes->get('/adm/balance/nielsen', 'Balance::nielsen');
    $routes->get('/adm/balance/beli', 'Balance::beli');
    $routes->get('/adm/balance/beli_barang', 'Balance::barang');
});







/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

