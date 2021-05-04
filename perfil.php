<?php

session_start();


if (!isset($_SESSION['nome'])) {
  header('Location: index.php');
  exit;
} else {
  $id = $_SESSION['id'];
  $nome = $_SESSION['nome'];
  $conn = mysqli_connect("localhost", "root", "", "sistemas");
  $postagens = $conn->query("SELECT * FROM postagens JOIN usuarios WHERE fk_usuario='$id' and nome='$nome'   ORDER BY id_postagens DESC");
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="estilo.css">
  <title>perfil</title>

</head>

<body>

  <?php
  include('menu.php');
  ?>



  <div style="height: 55vh;" class="row area-home p-0 m-0">
    <div class="sombra-home d-flex align-items-center justify-content-start">
      <div class=" col-4 ">

        <div class="area-info-home border ">
          <h5>Nome: <?php echo $_SESSION["nome"] ?></h5>
          <h5>Email: <?php echo $_SESSION["email"] ?></h5>
          <h5>Telefone: <?php echo $_SESSION["telefone"] ?></h5>
          <h5 class="mb-3">Cidade: <?php echo $_SESSION["cidade"] ?></h5>
      

          <button class="btn btn-danger mr-3">Editar Perfil</button><button class="btn btn-danger">Excluir Perfil</button>

        </div>

      </div>

    </div>

  </div>



  <h1 class="projetos-nome m-5 text-center" style="color:#757575;">Meus Livros publicados</h1>

  <div class="container">

    <div id="projetos" class=" row  bg-white m-0 p-0">


      <div class="col">

        <div class="row">




          <?php
          if ($postagens->num_rows > 0) {
            foreach ($postagens as $postagem) {

          ?>

              <div class="col-3 mb-5 d-flex align-items-center justify-content-center">

                <div class=" card d-flex align-items-center justify-content-center" style="width: 15rem; height:auto;">
                  <img style=" height:35vh; width:200px;" class="card-img-top pt-3" src="<?php echo $postagem['imagem'] ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $postagem["conteudo"] ?></h5>
                  </div>
                  <ul class="list-group list-group-flush">
                  
                    <li class="list-group-item">Cidade: <?php echo $postagem["cidade"] ?> </li>
                    <li class="list-group-item"><a class="btn btn-danger text-white">editar</a> <a  class="btn btn-danger text-white">excluir</a></li>
                  </ul>
                </div>
              </div>


            


          <?php }
        
          } ?>



        </div>


      </div>


    </div>


  </div>








<?  include("publicar_livro.php"); ?>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>