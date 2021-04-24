<?php

session_start();


if (!isset($_SESSION['nome'])) {
  header('Location: index.php');
  exit;
} else {
  $conn = mysqli_connect("localhost", "root", "", "sistemas");
  $postagens = $conn->query("SELECT * FROM postagens JOIN usuarios WHERE fk_usuario=id ORDER BY id_postagens DESC");
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



  <div style="height: 70vh;" class="row area-home p-0 m-0 ">
    <div class="sombra-home d-flex align-items-center justify-content-start">
      <div class=" col-4">

        <div class="text-center area-info-home ">
          <h1 class="title-home">Olá, <?php echo $_SESSION['nome'] ?></h1>

          <p class="frase-home text-justify">
            Aqui é sua area pessoal, onde você poderá ver os livros disponíveis e doar.
          </p>

          <button class="btn btn-danger" data-toggle="modal" data-target="#doacao-livro">Clique aqui pra doar</button>

        </div>

      </div>
    </div>

  </div>



  <h1 class="projetos-nome m-5 text-center" style="color:#757575;">Livros disponíveis</h1>

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
                    <li class="list-group-item">Postado por: <?php echo $postagem["nome"] ?></li>
                  </ul>
                </div>
              </div>



          <?php }
          } ?>



        </div>


      </div>


    </div>


  </div>



  <div class="modal fade" id="doacao-livro" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #ee6666d2;">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body d-flex text-center align-items-center justify-content-center">



          <div style="height:70vh;" class=" caixa-login d-flex  align-items-center justify-content-center">

            <form action="cadastro_livro.php" method="post">
              <img src="img/201-2013472_thats-textbook-icon3-textbook-icon.png" width="120px" alt="">
              <h3 class="title-publi-book">Publicar Livro</h3>
              <div class=" form-group d-flex align-items-center justify-content-center">
                <input class="form-control" name="imagem" type="text" placeholder="Informe a Url da imagem">
              </div>

              <div class="form-group d-flex align-items-center justify-content-center">
                <input class="form-control" name="livro" type="text" placeholder="Informe o nome do livro">
              </div>

              <div class="form-group d-flex align-items-center justify-content-center">

                <select name="categoria" size="5">
                  <option value="categoria" disabled selected>Selecione a Categoria</option>
                  <option value="Autoajuda">Autoajuda</option>
                  <option value="Aventura">Aventura</option>
                  <option value="Biográfia">Biográfia</option>
                  <option value="Comédia">Comédia</option>
                  <option value="Didático">Didático</option>
                  <option value="Drama">Drama</option>
                  <option value="Fantasia">Fantasia</option>
                  <option value="Ficção científica">Ficção científica</option>
                  <option value="História em Quadrinhos">História em Quadrinhos</option>
                  <option value="Infantil">Infantil</option>
                  <option value="Infanto Juvenil">Infanto Juvenil</option>
                  <option value="Poesia">Poesia</option>
                  <option value="Romance">Romance</option>
                  <option value="Terror">Terror</option>
                  <option value="Outro">Outro</option>
                </select>

              </div>

              <button type="submit" class="botao-publicacao-book btn btn-danger">Publicar</button>
            </form>


          </div>

        </div>
        <div class="modal-footer" style="background-color: #ee6666d2; padding: 30px;">

        </div>
      </div>
    </div>
  </div>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>