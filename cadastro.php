<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Projeto</title>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 <link rel="stylesheet" href="login.css">
</head>


<body>

  <div id="como-funciona" class="border row row-como-funciona m-0 p-0 ">

    <div  style="height: 100vh;" class=" col d-flex  align-items-center justify-content-center">

      <div class="text-center">
       
      <img src="img/Como-estudar-em-casa-imagens02-removebg-preview.png" width="300px" alt="">
   
      <div style="height:70vh;" class=" caixa-cadastro d-flex  align-items-center justify-content-center">


        <form action="cadastro_usuario.php" method="post">
          <h3>Cadastre-se</h3>

          <div class=" form-group d-flex align-items-center justify-content-center">
            <input class="form-control" name="nome" type="text" placeholder="Informe seu nome">
          </div>

          <div class=" form-group d-flex align-items-center justify-content-center">
            <input class="form-control" name="email" type="email" placeholder="Digite seu e-mail">
          </div>

          <div class="form-group d-flex align-items-center justify-content-center">
            <input class="form-control" name="senha" type="password" placeholder="Digite sua senha">
          </div>

          <div class="form-group d-flex align-items-center justify-content-center">
            <input class="form-control" name="conf_senha" type="password" placeholder="Confirme sua senha">
          </div>
          <button type="submit" class="botao-cadastar btn btn-danger">Entrar</button>
          <button class="botao-voltar-home btn"><a style="text-decoration: none; color: white;" href="index.php">Voltar</button></a>
          <a style="text-decoration: none;" href="#"><h5 class="fazer-cadastro" >Já possui cadastro? Realize o login.</h5></a>
          <!--Colocar o modal em um arquivo e fazer a chamada dele aqui-->
        </form>


      </div>


      </div>
      <!--fim text-center-->

    </div>
    <!--fim col -->




  </div>
  <!--row principal-->




  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

</body>

</html>