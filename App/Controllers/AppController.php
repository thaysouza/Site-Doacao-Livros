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


        $postagens->cadastrarPostagens();

        header('Location: /perfil');
    }


    public function buscarLivros()
    {


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




    public function areaAdm()
    {

        session_start();

        if (!isset($_SESSION['id_adm']) || $_SESSION['id_adm'] == '' || !isset($_SESSION['email']) || $_SESSION['email'] == '') {
            header('Location: /?login=erro2');
        }


        $usuario = Container::getModel('Usuario');

        $this->view->info_usuario = $usuario->getInfoUsuarioAdm();


        $this->render('areaAdm');
    }
}
