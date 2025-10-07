<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::roadmap');
$routes->get('/roadmapPage', 'Users::roadmap');
$routes->get('/', 'Home::index');
