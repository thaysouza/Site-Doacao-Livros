<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action
{

	public function index()
	{

		$postagens = Container::getModel('postagens');

		$this->view->livrostodos = $postagens->ultimosPostados();

		$this->render('index');
	}


	public function cadastrar()
	{

		$this->view->login = isset($_GET['login']) ? $_GET['login'] : '';

		$this->render('cadastrar');
	}




	public function inscreverse()
	{

		$this->view->usuario = array(
			'nome' => '',
			'email' => '',
			'telefone' => '',
			'cidade' => '',
			'senha' => '',

		);

		$this->view->erroCadastro = false;

		$this->render('inscreverse');
	}





	public function registrar()
	{

		$usuario = Container::getModel('Usuario');

		$usuario->__set('nome', $_POST['nome']);
		$usuario->__set('email', $_POST['email']);
		$usuario->__set('telefone', $_POST['telefone']);
		$usuario->__set('cidade', $_POST['cidade']);
		$usuario->__set('senha', md5($_POST['senha']));



		if ($usuario->validarCadastro() && count($usuario->getUsuarioPorEmail()) == 0) {

			$usuario->salvar();

			$this->render('cadastro');
		} else {

			$this->view->usuario = array(
				'nome' => $_POST['nome'],
				'email' => $_POST['email'],
				'telefone' => $_POST['telefone'],
				'cidade' => $_POST['cidade'],
				'senha' => $_POST['senha'],
			);

			$this->view->erroCadastro = true;

			$this->render('inscreverse');
		}
	}
}
