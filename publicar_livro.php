
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

