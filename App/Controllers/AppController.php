<?php

namespace App\Controllers;


use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {



    //metodo para realizar as funções em perfil
    public function perfil(){

        $this->validaAutenticacao();

            //RECUPERAR AS POSTAGENS
            $postagens = Container::getModel('postagens');
             
            $postagens->__set('id_usuario',$_SESSION['id']);

             
            //para setar os valores retornados do bd na pagina
            $this->view->postagem = $postagens->mostrarLivros();


            /////////////////////
           $usuario = Container::getModel('Usuario');
           $postagem = Container::getModel('postagens');
           $usuario->__set('id', $_SESSION['id']);

           $this->view->info_usuario = $usuario->mostrarInfoUsuario();
           $this->view->total_livros =  $postagem->mostrarTotalLivros();



            $this->render('perfil');

    }






    //metodo para retorno de todos os livros cadastrados
    public function livros(){

    

            //RECUPERAR AS POSTAGENS
            $postagens = Container::getModel('postagens');
             
            $postagem = $postagens->mostrarLivros();

            echo '<pre>';
             print_r($postagem);
            echo '</pre>';


            $this->render('livros');
        
    }





     //metodo para enviar as postagens
      
    public function postagens(){
       
         $this->validaAutenticacao();
 
         $postagens = Container::getModel('postagens');

         $postagens->__set('imagem', $_POST['imagem']);
         $postagens->__set('nome_livro', $_POST['nome_livro']);
         $postagens->__set('categoria', $_POST['categoria']);
         $postagens->__set('id_usuario', $_SESSION['id']);

         
         
         $postagens->cadastrarPostagens();
         //depois que foi salvo no bd redirecionar para a pagina novamente 
         header('Location: /perfil');

    

    }


    //metodo para buscar livro

    public function buscarLivros(){
        $this->validaAutenticacao();

        $pesquisarLivro = isset($_GET['livros']) ? $_GET['livros'] : '';


        $postagemLivros = array();

        if($pesquisarLivro != ''){
            $postagens = Container::getModel('postagens');
            $postagens->__set('categoria',$pesquisarLivro);
            $postagemLivros = $postagens->buscarLivros();
            
          
        }

        $this->view->postagemLivros = $postagemLivros;

       $this->render('buscarLivros');
    }




    //metodo para excluir as postagens
   public function excluir_postagens(){
    $this->validaAutenticacao();

   $excluir_postagens= isset($_GET['excluir_postagens']) ? $_GET['excluir_postagens'] : '';
   $id_postagem = isset($_GET['id_postagem'])? $_GET['id_postagem'] : '';

   $postagens = Container::getModel('postagens');
   $postagens->__set('id', $_SESSION['id']);

   if($excluir_postagens == 'remover'){

       $postagens->removerPostagem($id_postagem);
       header('Location: /perfil');
    
   }

   }


  //metodo para autenticar o usuario
    public function validaAutenticacao(){
        session_start();

        if(!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['nome']) || $_SESSION['nome'] == ''){
            header('Location: /?login=erro');
        }
    }




    ////ADM

    public function areaAdm(){

         session_start();

         if(!isset($_SESSION['id_adm']) || $_SESSION['id_adm'] == '' || !isset($_SESSION['email']) || $_SESSION['email'] == '' ){
            header('Location: /?login=erro2');
        }


        $usuario = Container::getModel('Usuario');

        $this->view->info_usuario = $usuario->getInfoUsuarioAdm();


         $this->render('areaAdm');
        
           
    }






    

}