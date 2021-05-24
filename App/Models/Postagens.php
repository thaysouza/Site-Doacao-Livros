<?php 


namespace App\Models;

use MF\Model\Model;

class Postagens extends Model {

    private $id; 
    private $id_usuario;
    private $nome_livro;
    private $imagem;
    private $categoria;
    private $data;
 
    public function __get($atributo){
        return $this->$atributo;
    }
 
    public function __set($atributo, $valor) {
    $this->$atributo = $valor;
    }


    ///salvar
    public function cadastrarPostagens(){

        $query = "insert into postagens(id_usuario, nome_livro, imagem, categoria)
        values(:id_usuario, :nome_livro, :imagem,:categoria)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
        $stmt->bindValue(':nome_livro', $this->__get('nome_livro'));
        $stmt->bindValue(':imagem', $this->__get('imagem'));
        $stmt->bindValue(':categoria', $this->__get('categoria'));
        $stmt->execute();
    
        return $this;
    }



    ///recuperar

    public function infoUsuarioPostagem() {

        $query = "
        
           select 
              p.id, p.id_usuario, u.nome, u.telefone, u.cidade, p.nome_livro, p.imagem, p.categoria, DATE_FORMAT(p.data, '%d/%m/%Y %H:%i') as data
           from 
               postagens as p 
               left join usuarios as u on (p.id_usuario = u.id)
           where 
               p.id_usuario = :id_usuario
           order by 
              data desc
        ";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
        $stmt->execute();


        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }


    public function mostrarLivros() {

        $query = "
        
           select id, id_usuario, nome_livro, imagem, categoria, data from postagens 
        ";

        $stmt = $this->db->prepare($query);
        $stmt->execute();


        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }


    public function buscarLivros(){
        $query = "select 
        p.id, p.id_usuario, u.nome, u.telefone, u.cidade, p.nome_livro, p.imagem, p.categoria, DATE_FORMAT(p.data, '%d/%m/%Y %H:%i') as data
     from 
         postagens as p 
         left join usuarios as u on (p.id_usuario = u.id)
     where 
     p.categoria like :categoria
     ";

     $stmt = $this->db->prepare($query);
     $stmt->bindValue(':categoria', $this->__get('categoria'));
     $stmt->execute();


     return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }


    public function removerPostagem($id_postagem){
      
        $query = "delete from postagens where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id_postagem);
        $stmt->execute();

        return true;
    }

 



        //total de livros doados
        public function mostrarTotalLivros(){
            $query = "select count(*) as total_livros from postagens where id_usuario = :id_usuario";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id_usuario', $this->__get('id_usuario')); ///associando ao id usuario da sessão 
            $stmt->execute();
    
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }

    
 
 


}