<?php

namespace App\Controllers;


use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action
{




    public function perfil()
    {

        $this->validaAutenticacao();


        $postagens = Container::getModel('postagens');

        $postagens->__set('id_usuario', $_SESSION['id']);

        $this->view->postagem = $postagens->infoUsuarioPostagem();


        $usuario = Container::getModel('Usuario');

        $usuario->__set('id', $_SESSION['id']);

        $this->view->info_usuario = $usuario->mostrarInfoUsuario();
        $this->view->total_livros =  $usuario->mostrarTotalLivros();

        $this->view->post = isset($_GET['post']) ? $_GET['post'] : '';

        $this->render('perfil');
    }




    public function livros()
    {


        $postagens = Container::getModel('postagens');

        $this->view->livrostodos = $postagens->mostrarLivros();


        $this->render('livros');
    }




    public function postagens()
    {

        $this->validaAutenticacao();

        $postagens = Container::getModel('postagens');

        $postagens->__set('imagem', $_POST['imagem']);
        $postagens->__set('nome_livro', $_POST['nome_livro']);
        $postagens->__set('categoria', $_POST['categoria']);
        $postagens->__set('id_usuario', $_SESSION['id']);



        if ($postagens->__get('imagem') == '' || $postagens->__get('nome_livro') == ''  || $postagens->__get('categoria') == '') {
            header('Location: /perfil?post=erro');
        } else {
            $postagens->cadastrarPostagens();

            header('Location: /perfil');
        }
    }





    public function buscarLivros()
    {
        $this->validaAutenticacao();

        $pesquisarLivro = isset($_GET['livros']) ? $_GET['livros'] : '';


        $postagemLivros = array();

        if ($pesquisarLivro != '') {
            $postagens = Container::getModel('postagens');
            $postagens->__set('categoria', $pesquisarLivro);
            $postagemLivros = $postagens->buscarLivros();
        }

        $this->view->postagemLivros = $postagemLivros;

        $this->render('buscarLivros');
    }

    public function remover_postagens()
    {

        $this->validaAutenticacao();

        $acao = isset($_GET['remover_postagens']) ? $_GET['remover_postagens'] : '';
        $id_postagem = isset($_GET['id']) ? $_GET['id'] : '';

        $postagem = Container::getModel('postagens');
        $postagem->__set('id', $_SESSION['id']);

        if ($acao == 'remover') {
            $postagem->removerPostagem($id_postagem);

            header('Location: /perfil');
        }
    }



    public function validaAutenticacao()
    {
        session_start();

        if (!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['nome']) || $_SESSION['nome'] == '') {
            header('Location: /?login=erro');
        }
    }
}
