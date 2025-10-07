<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::loginPage');
$routes->get('/loginPage', 'Users::loginPage');

