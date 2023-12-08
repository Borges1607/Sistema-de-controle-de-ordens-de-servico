<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index', ['as' => 'home']);
$routes->get('/login', 'Login::index', ['as' => 'login']);
//$routes->post('/login', 'Login::store', ['as' => 'login.store']);

$routes->get('/cadastro', 'Login::Cadastro', ['as' => 'cadastro']);

$routes->get('/cadMecanico', 'CadMecanico::index', ['as' => 'cadMecanico']);
$routes->get('/cadServico', 'CadServico::index', ['as' => 'cadServico']);
$routes->get('/cadVeiculo', 'CadVeiculo::index', ['as' => 'cadVeiculo']);
$routes->get('/listMecanicos', 'ListMecanicos::index', ['as' => 'listMecanicos']);
$routes->get('/listServicos', 'ListServicos::index', ['as' => 'listServicos']);
$routes->get('/listVeiculos', 'ListVeiculos::index', ['as' => 'listVeiculos']);