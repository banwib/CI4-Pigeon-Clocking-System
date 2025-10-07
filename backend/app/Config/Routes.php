<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::login');
$routes->get('/moodboardPage', 'Users::moodBoard');
$routes->get('/roadmapPage', 'Users::roadmap');
$routes->get('/login', 'Users::login');
$routes->get('/signup', 'Users::signup');
$routes->post('/login', 'Users::processLogin');
$routes->post('/signup', 'Users::processSignup');
