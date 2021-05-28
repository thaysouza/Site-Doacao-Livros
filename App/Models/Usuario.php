<?php 


namespace App\Models;

use MF\Model\Model;

class Usuario extends Model {

   private $id; 
   private $nome;
   private $email;
   private $telefone;
   private $cidade;
   private $senha;

   public function __get($atributo){
       return $this->$atributo;
   }

   public function __set($atributo, $valor) {
   $this->$atributo = $valor;
   }

   //salvar  no banco de dados 
   public function salvar() {

    $query = "insert into usuarios(nome, email, telefone, cidade, senha)values(:nome, :email, :telefone, :cidade, :senha)";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(':nome', $this->__get('nome'));
    $stmt->bindValue(':email', $this->__get('email'));
    $stmt->bindValue(':telefone', $this->__get('telefone'));
    $stmt->bindValue(':cidade', $this->__get('cidade'));
    $stmt->bindValue(':senha', $this->__get('senha')); //md5() -> hash 32 caracteres
    $stmt->execute();

    return $this;
}

//validar se um cadastro pode ser feito
public function validarCadastro() {
    $valido = true;

    if(strlen($this->__get('nome')) < 3) {
        $valido = false;
    }

    if(strlen($this->__get('email')) < 3) {
        $valido = false;
    }

    if(strlen($this->__get('senha')) < 3) {
        $valido = false;
    }


    return $valido;
}



    //recuperar um usuario por e-mail /// verificar se o email ja foi cadastrado
    public function getUsuarioPorEmail(){

        $query = "select nome, email from usuarios where email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }



	public function autenticar() {

		$query = "select id, nome, email from usuarios where email = :email and senha = :senha";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':email', $this->__get('email'));
		$stmt->bindValue(':senha', $this->__get('senha'));
		$stmt->execute();

		$usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

		if($usuario['id'] != '' && $usuario['nome'] != '') {
			$this->__set('id', $usuario['id']);
			$this->__set('nome', $usuario['nome']);
		}

		return $this;
	}


    public function mostrarInfoUsuario(){
        $query = "select nome, email,telefone,cidade from usuarios where id = :id_usuario";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_usuario', $this->__get('id'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function getInfoUsuarioAdm(){
        $query = "select nome, email,telefone,cidade from usuarios ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function mostrarTotalLivros(){
        $query = "select count(*) as total_livros from postagens where id_usuario = :id_usuario";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_usuario', $this->__get('id'));
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }






 
}