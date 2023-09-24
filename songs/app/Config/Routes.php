<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/song', 'MusicController::jemalyn');
$routes->post('/create', 'MusicController::create');
$routes->post('/playlists/(:any)', 'MusicController::playlists/$1');
$routes->post('/play/(:any)', 'MusicController::play/$1');
$routes->post('/search', 'MusicController::search');
$routes->post('music/upload', 'MusicController::upload');





