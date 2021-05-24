<?php

namespace App\Controllers;


use MF\Controller\Action;
use MF\Model\Container;

class AuthController extends Action {

   public function autenticar(){
       
    $usuario = Container::getModel('Usuario');

    $usuario->__set('email', $_POST['email']);
    $usuario->__set('senha', md5($_POST['senha']));

    //fazendo um select em modal>usuario
    $usuario->autenticar();

   //So é retornado algo quando se tem os dados registrado no bd, com isso será feito uma veriifcação para autenticacao ///modal>usuario
   //quando email e senha é autenticado, é recuperado o id e senha, mostra que o user existe
   
    if($usuario->__get('id') != '' && $usuario->__get('nome') != ''){
        //echo 'Autenticado';
        session_start();

        $_SESSION['id'] = $usuario->__get('id');
        $_SESSION['nome'] = $usuario->__get('nome');

         header('Location: /perfil');


    }else{
        header('Location: /?login=erro');
    }

   }




   public function autenticarAdm(){

    
    $adm = Container::getModel('Administrador');

    $adm ->__set('email', $_POST['email']);
    $adm ->__set('senha',md5($_POST['senha']));

    $adm->autenticarAdm();
 
   
    if($adm->__get('id_adm') != '' && $adm->__get('email') != ''){
        //echo 'Autenticado';
        session_start();

        $_SESSION['id_adm'] = $adm->__get('id_adm');
        $_SESSION['email'] = $adm->__get('email');

         header('Location: /areaAdm');


    }else{
        header('Location: /?login=erro2');
    }

   }





   public function sair(){
       session_start();
       session_destroy();
       header('Location: /');
   }



}