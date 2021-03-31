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
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="login.css">
</head>


<body>

  <header>
    <nav class="menu navbar navbar-expand-md navbar-light fixed-top">
    
        <a href="#home" style="text-decoration: none;">
         <img class="ml-5" src="img/livro-menu-removebg-preview.png" width="70px" alt="">
        </a>

        <button class="navbar-toggler bg-danger" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#home" class="nav-nome nav-link  mx-4 text-white ">Livros</a>
            </li>

            <li class="nav-item">
              <a href="#sobremim" class="nav-nome nav-link mx-4 text-white">Sobre</a>
            </li>

            <li class="nav-item">
              <a href="#contato" class="nav-nome nav-link  mx-4 text-white">Contato</a>
            </li>

            <li class="nav-item">
              <a href="login.html" class="nav-entrar nav-link mx-5 mt-1 text-white" data-toggle="modal" data-target="#fazer-login">
                Entrar
              </a>
            </li>
          </ul>

        </div>

 

    </nav>

  </header>

  <div id="home" class=" row row-home m-0 p-0 ">

    <div  style="height: 100vh;" class="col  col-md-6 d-flex  align-items-center justify-content-center">

      <div class="text-center">
       
      <h1 class="titulo-home">Tá afim de doar um livro?</h1>
   
      <button class="botao-home btn btn-white">Saiba como</button>
      </div>
      <!--fim text-center-->

    </div>
    <!--fim col 1-->


    <div style="height: 100vh;" class="col col-md-6 d-flex  align-items-center justify-content-center">
      <div class=" text-center ">
    
        <img  style="margin-top: 10%;" src="img/img-home.png" alt="">


      </div>
      <!---div text-center-->
    </div>
    <!--fim col 2-->


  </div>
  <!--row principal-->




  <div id="home" style="height: 80vh;" class="row row-info m-0 p-0 ">

    <div class=" col-12 d-flex  align-items-center justify-content-center">
      <div class="text-center">     
        
      <h1 class="mb-5 titulo-saiba-como">Entenda como funciona</h1>

<!--- Conteudo   -->
      <div style="width: 80vw;" class=" row row-como-funciona">
        <div  class="caixa-como-funciona mx-2 col d-flex  align-items-center justify-content-center">
            <div class="text-center">     
    
                <h3>1</h3>
                <h3 class="titulo-como-funciona">Faça seu cadastro</h3>
                <div class="row">
                  <div  class="col-12 d-flex  align-items-center justify-content-center">
                   <div class="sombra d-flex  align-items-center justify-content-center">
                       <img src="img/329739.png" width="60px" alt="">
                   </div>
                  </div>
                </div>
            </div>
            <!--fim text-center-->
          </div>
          <!--fim col 1-->
    
          <div class="caixa-como-funciona mx-2 col d-flex  align-items-center justify-content-center">
            <div class="text-center">     
    
                <h3>2</h3>
                <h3 class="titulo-como-funciona ">Publique seu livro</h3>
                <div class="row">
                  <div class="col-12 d-flex  align-items-center justify-content-center">
                   <div class="sombra d-flex  align-items-center justify-content-center">
                       <img src="img/196039.png" width="50px" alt="">
                   </div>
                  </div>
                </div>
            </div>
            <!--fim text-center-->
          </div>
          <!--fim col 1-->
    
          <div  class="caixa-como-funciona mx-2 col d-flex  align-items-center justify-content-center">
            <div class="text-center">     
    
                <h3 class="mt-1">3</h3>
                <h3 class="titulo-como-funciona-book">Pronto :)</h3>
                <div class="row">
                  <div class="col-12 d-flex  align-items-center justify-content-center">
                   <div class="sombra-book d-flex  align-items-center justify-content-center">
                       <img src="img/story-book.png" width="90px" alt="">
                   </div>
                  </div>
                </div>
            </div>
            <!--fim text-center-->
          </div>
          <!--fim col 1-->

      </div>

<!---////// Conteudo   -->

     <a href="cadastro.html"><button class="botao-cadastrar btn btn-danger" >Cadastre-se</button></a>
      </div>
      <!--fim text-center-->
    </div>
    <!--fim col 1-->


  </div>
  <!--row principal-->



  <footer>

   
    <div class="d-flex justify-content-center align-items-center" style="height: 60vh; background-color: #7B1FA2;">
       <!---
      <div class="row ">

        <div class="text-center col" style="width: 20vw;">
          <a href="#" target="_blank">
            <img src="img/thay.jpg" class="bd-placeholder-img rounded-circle" width="130" height="130"/>
          </a>
          <h4>Enzo damascena</h4>
          <p><a class="btn btn-secondary mt-2" href="#" role="button">Linkedin &raquo;</a></p>
        </div>



        <div class="text-center col" style="width: 20vw;">
          <a href="#" target="_blank">
            <img src="img/thay.jpg" class="bd-placeholder-img rounded-circle" width="130" height="130"/>
          </a>
          <h4>Jean Kenishi</h4>
          <p><a class="btn btn-secondary mt-2" href="#" role="button">Linkedin &raquo;</a></p>
        </div>

        <div class="text-center col" style="width: 20vw;">
          <a href="#" target="_blank">
            <img src="img/thay.jpg" class="bd-placeholder-img rounded-circle" width="130" height="130"/>
          </a>
          <h4>Tayane Souza</h4>
          <p><a class="btn btn-secondary mt-2" href="#" role="button">Linkedin &raquo;</a></p>
        </div>
      </div>

  -->
    </div>

  </footer>


  <div class="modal fade" id="fazer-login" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #ee6666d2;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div  class="modal-body d-flex text-center align-items-center justify-content-center">


          
          <div style="height:60vh;" class=" caixa-login d-flex  align-items-center justify-content-center">
            <form action="login_usuario.php" method="post">
              <h3>Login</h3>
              <div class=" form-group d-flex align-items-center justify-content-center">
                <input class="form-control" name="email" type="email" placeholder="Digite seu e-mail">
              </div>
    
              <div class="form-group d-flex align-items-center justify-content-center">
                <input class="form-control" name="senha" type="password" placeholder="Digite sua senha">
              </div>
              <button type="submit" class="botao-login btn btn-danger">Entrar</button>
              <a style="text-decoration: none;" href="cadastro.php"><h5 class="fazer-cadastro" >Ainda não possui cadastro? Clique aqui.</h5></a>
            </form>
    
    
          </div>

        </div>
        <div class="modal-footer" style="background-color: #ee6666d2; padding: 30px;">
        
        </div>
      </div>
    </div>
  </div>
  


  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

</body>

</html>