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
$routes->setDefaultController('Authentication');
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
// $routes->get('auth', 'Auth::index');
// Data Kelas
$routes->post('process', 'Authentication::loginproses');
$routes->get('registrasi', 'admin\Siswa::registrasi');
$routes->post('registrasi', 'admin\Siswa::save');
// $routes->get('registrasi', 'admin\Siswa::get');
$routes->group('admin', function ($routes) {
    $routes->get('/', 'admin\home::index');
    $routes->get('siswa', 'admin\Siswa::index');
});
$routes->group('instruktur', function ($routes) {
    $routes->add('/', 'instruktur\home::index');
});
$routes->group('siswa', function ($routes) {
    $routes->add('/', 'siswa\Home::index');
});
// $routes->post('register', 'admin\Siswa::saveregister');
// $routes->put('siswa', 'admin\Siswa::edit');




// Data Siswa
// $routes->get('siswa', 'admin\Siswa::index');
// $routes->get('siswa/add', 'admin\Siswa::create');
// $routes->post('siswa', 'admin\Siswa::save');
// $routes->put('siswa', 'admin\Siswa::edit');

// // Data Siswa
// $routes->get('alumni', 'Alumni::index');
// $routes->get('alumni/add', 'Alumni::create');
// $routes->post('alumni', 'Alumni::save');

// data kelas
$routes->get('kelas', 'admin\Kelas::index');
$routes->get('kelas/add', 'admin\Kelas::create');
$routes->post('kelas', 'admin\Kelas::save');

// Data Program Kursus
$routes->get('programkursus', 'admin\Programkursus::index');
$routes->get('programkursus/add', 'admin\Programkursus::create');
$routes->post('programkursus', 'admin\Programkursus::save');

//Data Instruktur
$routes->get('instruktur', 'admin\instruktur::index');
$routes->get('instruktur/add', 'admin\instruktur::create');
$routes->post('instruktur', 'admin\instruktur::save');

// Login
// $routes->get('login', 'Auth::login');
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