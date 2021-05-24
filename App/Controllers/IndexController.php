<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->view->login = isset($_GET['login']) ? $_GET['login'] : '';

		$this->render('index');
	}




	public function inscreverse() {

		$this->view->usuario = array(
			'nome' =>'',
			'email' => '',
			'telefone' => '',
			'cidade' => '',
			'senha' => '',

		 );

		$this->view->erroCadastro = false;

		$this->render('inscreverse');
	}





	public function registrar() {

		//receber dados do formulario 
         $usuario = Container::getModel('Usuario');

		 $usuario->__set('nome', $_POST['nome']);
		 $usuario->__set('email', $_POST['email']);
		 $usuario->__set('telefone', $_POST['telefone']);
		 $usuario->__set('cidade', $_POST['cidade']);
		 $usuario->__set('senha', md5($_POST['senha']));
		 
         

		 if($usuario->validarCadastro() && count($usuario->getUsuarioPorEmail()) == 0){
           //count retorna a  quantidade de registros encontrados na busca 

				$usuario->registrar();

                //para retornar uma mensagem de sucesso
				$this->render('cadastro');

        
		 }else{
            //pra setar os nomes com o value
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


?>