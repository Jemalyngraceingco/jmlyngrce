<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
['filter'=> 'autGuard'];
$routes->get('/register', 'MainController::register');
$routes->post('/authreg', 'MainController::authreg');
$routes->post('/login', 'MainController::login');
$routes->get('/authlog', 'MainController::authlog');
$routes->post('/admin', 'MainController::jemalyn');
$routes->get('/admin', 'MainController::jemalyn');
$routes->post('/save', 'MainController::save');
$routes->get('/delete/(:any)', 'MainController::delete/$1');
$routes->get('edit/(:num)', 'MainController::edit/$1');
$routes->post('/update/(:any)', 'MainController::update/$1');
$routes->get('/eccomerce', 'MainController::eccomerce');











