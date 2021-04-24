<?php

session_start();

$imagem = $_POST['imagem'];
$nomelivro = $_POST['livro'];
$categoria = $_POST['categoria'];
$id = $_SESSION['id'];



if(strlen($imagem)> 3){
  
    
     $conn = mysqli_connect("localhost","root","","sistemas");

      $result = $conn->query("INSERT INTO postagens(fk_usuario,imagem,conteudo,categoria) 
      values ( $id, '$imagem', '$nomelivro', '$categoria')");

      if($result){
        echo "
        <script>
             alert('Postagem cadastrada com sucesso!')
             location.href = 'home.php'
        </script>
        ";
      

      }else{
        echo "
        <script>
        alert('Não foi possivel cadastrar a postagem!')
        location.href = 'home.php'
   </script>
   ";
      }

    }else{

      echo "
      
      <script>
      alert('Digite algo para postar!')
      location.href = 'home.php'
 </script>
 ";
    }

