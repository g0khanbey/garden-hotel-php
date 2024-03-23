<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/about', 'AboutController::index');

$routes->get('/amenities', 'AmenitiesController::index');

$routes->get('/gallery', 'GalleryController::index');

$routes->get('/contacts', 'ContactsController::index');

$routes->get('/faqs', 'FaqsController::index');



$routes->get('/login', 'LoginController::index');

$routes->get('/register', 'RegisterController::index');

$routes->get('/loginislem', 'LoginController::index');

$routes->post('/registerislem', 'RegisterislemController::index');





?>