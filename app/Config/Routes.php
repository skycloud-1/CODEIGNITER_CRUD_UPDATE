<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/homepage', 'Home::Homepage');
$routes->get('/user', 'Users::userMgt');
$routes->get('/homepage/(:any)', 'Home::unknown/$1');
$routes->get('/editUser/(:any)', 'Users::editUser/$1');
$routes->post('/updateUser', 'Users::updateUser');
$routes->get('/insert', 'Home::insert');
$routes->get('/delete/(:any)', 'Users::delete/$1');
$routes->post('/actionInsert', 'Home::actionInsert'); 

