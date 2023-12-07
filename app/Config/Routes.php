<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->post('/login', 'Login::store', ['as' => 'login.store']);

$routes->get('/cadastro', 'Login::Cadastro', ['as' => 'cadastro']);




