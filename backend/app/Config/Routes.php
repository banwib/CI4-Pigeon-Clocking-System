<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/moodboardPage', 'Users::moodBoard');
$routes->get('/roadmapPage', 'Users::roadmap');
$routes->get('/loginPage', 'Users::login');
$routes->get('/signupPage', 'Users::signup');
$routes->post('/loginPage', 'Users::processLogin');
$routes->post('/signupPage', 'Users::processSignup');
$routes->get('/manageclubPage', 'Users::manageClub');
$routes->get('/racepointsPage', 'Users::racePoints');
$routes->get('/racesPage', 'Users::races');
$routes->get('/logsPage', 'Users::logs');
$routes->get('/', 'Users::signup');
$routes->get('/signupPage', 'Users::signup');


$routes->get('/', 'Users::index');
