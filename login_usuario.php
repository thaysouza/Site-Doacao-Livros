<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if (strlen($email) > 3 && strlen($senha) > 3) {
  $senha_cripto = md5($senha);

  $conn = mysqli_connect("localhost", "root", "", "sistemas");

  $resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' AND senha = '$senha_cripto'");

  $usuarios = mysqli_fetch_assoc($resultado_consulta);

  $_SESSION['nome'] = $usuarios["nome"];
  $_SESSION['email'] = $usuarios["email"];
  $_SESSION['id'] = $usuarios["id"];

  header('Location: home.php');
} else {
  echo "
      <script>
          alert('E-mail ou senha inválidos!')
          location.href = 'index.php'
      </script>
";
}
