<?php


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

if(strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $conf_senha) {
  
  $senha_cripto = md5($senha);

  $conn = mysqli_connect("localhost", "root", "", "sistemas");
  $sql = "INSERT INTO usuarios (nome, email,telefone, cidade, senha) values ('$nome', '$email', '$telefone','$cidade','$senha_cripto')";
  $conn->query($sql);

  echo "<script>
          alert('Cadastro efetuado')
          window.location.href = 'index.html'
        </script>
        ";
}
else if ($senha != $conf_senha) {
  echo "<script>
          alert('As senhas devem ser iguais, tente novamente!')
          window.location.href = 'cadastro.php'
        </script>
        ";
}
else if (strlen($nome) <= 3) {
  echo "<script>
          alert('Digite um nome válido para realizar o cadastro.')
          window.location.href = 'cadastro.php'
        </script>
        ";
}
else if (strlen($email) <= 3) {
    echo "<script>
          alert('Digite um e-mail válido para realizar o cadastro.')
          window.location.href = 'cadastro.php'
        </script>
        ";
}
else if (strlen($senha) <= 3) {
    echo "<script>
          alert('Digite uma senha válida para realizar o cadastro (+ de 3 caracteres)')
            window.location.href = 'cadastro.php'
          </script>
          ";
}