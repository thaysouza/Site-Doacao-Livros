<?php 

//let = $

session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if(strlen($email) > 3 && strlen($senha) > 3){

     $conn = mysqli_connect("localhost", "root", "", "site_doacao_livros");
      
     $sql = "SELECT * from usuarios where email = '$email' AND senha = '$senha'"; 
     
     $result = $conn->query($sql);
     
     //$usuario recebe a lista de usuários
     $usuarios = mysqli_fetch_assoc($result);
    
     echo '<pre>';
     print_r($usuarios);
     echo '</pre>';
  
}
else{
    echo "
    <script>
       alert('E-mail ou senha inválidos !')
       location.href = 'index.php'
    </script>
    ";
}