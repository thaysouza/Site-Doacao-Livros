<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{

	protected function initRoutes()
	{

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['cadastrar'] = array(
			'route' => '/cadastrar',
			'controller' => 'indexController',
			'action' => 'cadastrar'
		);


		$routes['inscreverse'] = array(
			'route' => '/inscreverse',
			'controller' => 'indexController',
			'action' => 'inscreverse'
		);


		$routes['registrar'] = array(
			'route' => '/registrar',
			'controller' => 'indexController',
			'action' => 'registrar'
		);


		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'AuthController',
			'action' => 'autenticar'
		);


		$routes['perfil'] = array(
			'route' => '/perfil',
			'controller' => 'AppController',
			'action' => 'perfil'
		);


		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'AuthController',
			'action' => 'sair'
		);


		$routes['postagens'] = array(
			'route' => '/postagens',
			'controller' => 'AppController',
			'action' => 'postagens'
		);

		$routes['livros'] = array(
			'route' => '/livros',
			'controller' => 'AppController',
			'action' => 'livros'
		);

		$routes['buscarLivros'] = array(
			'route' => '/buscarLivros',
			'controller' => 'AppController',
			'action' => 'buscarLivros'
		);


		$routes['remover_postagens'] = array(
			'route' => '/remover_postagens',
			'controller' => 'AppController',
			'action' => 'remover_postagens'
		);


		$routes['autenticarAdm'] = array(
			'route' => '/autenticarAdm',
			'controller' => 'AuthController',
			'action' => 'autenticarAdm'
		);





		$this->setRoutes($routes);
	}
}
