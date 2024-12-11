<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Home/home', 'Home::index');

//datapaketwo
$routes->get('/siswa', 'siswa::index');
$routes->get('/siswa/create', 'siswa::create');
$routes->post('/siswa/store', 'siswa::store');
$routes->get('/siswa/edit/(:num)', 'siswa::edit/$1');
$routes->post('/siswa/update/(:num)', 'siswa::update/$1');
$routes->get('/siswa/delete/(:num)', 'siswa::delete/$1');


//datakriteria
$routes->get('/kriteria', 'Kriteria::index');
$routes->get('/kriteria/create', 'Kriteria::create');
$routes->post('/kriteria/store', 'Kriteria::store');
$routes->get('/kriteria/edit/(:num)', 'Kriteria::edit/$1');
$routes->post('/kriteria/update/(:num)', 'Kriteria::update/$1');
$routes->get('/kriteria/delete/(:num)', 'Kriteria::delete/$1');

//databobot
$routes->get('/bobot', 'Bobot::index');
$routes->get('/bobot/create', 'Bobot::create');
$routes->post('/bobot/store', 'Bobot::store');
$routes->get('/bobot/edit/(:num)', 'Bobot::edit/$1');
$routes->post('/bobot/update/(:num)', 'Bobot::update/$1');
$routes->get('/bobot/delete/(:num)', 'Bobot::delete/$1');

//dataalternatif
$routes->get('/alternatif', 'Alternatif::index');
$routes->get('/alternatif/create', 'Alternatif::create');
$routes->post('/alternatif/store', 'Alternatif::store');
$routes->get('/alternatif/edit/(:num)', 'Alternatif::edit/$1');
$routes->post('/alternatif/update/(:num)', 'Alternatif::update/$1');
$routes->get('/alternatif/delete/(:num)', 'Alternatif::delete/$1');


//Metode SAW
$routes->get('/Home/callviewhitung', 'Home::callviewhitung');
$routes->get('/Home/callviewnormalisasi', 'Home::callviewnormalisasi');
$routes->get('/Home/callviewranking', 'Home::callviewranking');
// $routes->get('/Home/callviewkeputusan', 'Home::callviewkeputusan');