<?php


namespace App\Models;

use MF\Model\Model;

class Administrador extends Model
{

    private $id_adm;
    private $email;
    private $senha;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }



    public function autenticarAdm()
    {

        $query = "select id_adm, email, senha from administrador where email = :email and senha = :senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        $adm = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($adm['id_adm'] != '') {
            $this->__set('id_adm', $adm['id_adm']);
            $this->__set('email', $adm['email']);
        }

        return $this;
    }
}
