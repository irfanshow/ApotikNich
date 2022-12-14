<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'User\FunctionLandingPage::index');

//Login Admin
//View
$routes->get('/login', 'functionUmum::viewLogin');
//Proses Login
$routes->post('/login_admin', 'Administrasi::login_admin');
$routes->get('/login_admin', 'Administrasi::login_admin');


//Register Admin
$routes->get('/register', 'functionUmum::viewRegister');

//Dashboard
$routes->get('/dashboard', 'Dashboard::dashboard');

//Obat
$routes->get('/obat', 'Obat::index');
$routes->get('/create', 'Obat::create');
$routes->post('/saveObat', 'Obat::saveObat');
$routes->get('/edit/(:num)', 'Obat::edit/$1');
$routes->post('/update/(:num)', 'Obat::update/$1');
$routes->delete('/delete/(:num)', 'Obat::delete/$1');
$routes->get('/pages', 'Pages::index');

//Administrasi
$routes->get('/administrasi', 'Administrasi::index');

//History
$routes->get('/history', 'History::index');

//Kasir (ADMIN)
$routes->get('/kasir', 'Kasir::index');
$routes->get('/tambahKasir', 'Kasir::tambahKasir');
$routes->post('/saveDataKasir', 'Kasir::saveDataKasir');
$routes->get('/editKasir/(:num)', 'Kasir::editKasir/$1');
$routes->post('/updateKasir/(:num)', 'Kasir::updateKasir/$1');
$routes->delete('/deleteKasir/(:num)', 'Kasir::deleteKasir/$1');

//USER
//Landing Page User
$routes->get('/landingPageUser', 'User\FunctionLandingPage::index');
$routes->get('/SemuaObat', 'User\FunctionLandingPage::semuaObat');

//KASIR
//login Kasir
$routes->get('/loginKasir', 'Kasir\FunctionLoginRegisterKasir::viewLoginKasir');
$routes->post('/login_kasir_proses', 'Kasir\FunctionLoginRegisterKasir::login_kasir');
$routes->get('/login_kasir_proses', 'Kasir\FunctionLoginRegisterKasir::login_kasir');

//register Kasir
//$routes->get('/registerUser', 'User\FunctionLoginRegisterUser::viewRegisterUser');
$routes->get('/landingPageKasir', 'Kasir\FunctionKasir::index');
$routes->get('/SemuaObatKasir', 'Kasir\FunctionKasir::semuaObatKasir');
$routes->get('/cartView', 'Kasir\FunctionKasir::cartView');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
