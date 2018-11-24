@component('components.nav')
  @endcomponent

@extends('layout.layoutbase')

@section('body')

    <div class="container">

      <div class="al">
      <h3>Plantas Catalogadas</h3>
    </div>


      <div class="row">

        <div class="col col-md-3">
            <div class="card">
              <a href="PlantaEx.html"><img class="img-responsive center" src="imgs/cacto.jpg" width="200" height="200"></a>
                <h3>Cacto</h3>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <img class="img-responsive center" src="imgs/babosa.png" width="200" height="200">
              <h3>Babosa</h3>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <img class="img-responsive center" src="imgs/palmeira.jpg" width="200" height="200">
              <h3>Palmeira</h3>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <img class=" center" src="imgs/hortela.jpg" width="200" height="200">
              <h3>Hortelã</h3>
            </div>
          </div>

          <div class="row">
        <div class="col col-md-3">
            <div class="card">
              <img class="img-responsive center" src="imgs/pinheiro.jpg" width="200" height="200">
                <h3>Pinheiro</h3>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <img class="img-responsive center" src="imgs/girassol.jpg" width="200" height="200">
              <h3>Girassol</h3>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <img class="img-responsive center" src="imgs/zami.jpg" width="200" height="200">
              <h3>Zamioculca-mini</h3>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <img class=" center" src="imgs/orquidea.jpg" width="200" height="200">
              <h3>Orquídea</h3>
            </div>
          </div>
          <br><br>

        <!-- Busca -->
        <div class="card-body" style="width:50% background-color:white">

            <div class="col-md-8">
                <form>
                  <div class="row">
                    <div class="form-group col-md-6" style="margin-left: 15px">
                        <h4 class="pb-4">Encontre a planta que você procura.</h4>
                        <input id="busca" placeholder="Digite o nome da planta" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6"></div>
            </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <select id="localCultivo" class="form-control">
                            <option selected>Local do cultivo</option>
                            <option> Vaso</option>
                            <option> Jardim</option>
                            <option> Campo</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <select id="portePlanta" class="form-control">
                            <option selected>Pote da Planta</option>
                            <option> até 1,5m</option>
                            <option> entre 1,5m e 3,0m</option>
                            <option> entre 3,5m e 5,0m</option>
                            <option> maior que 5,0m</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <select id="regiaoPlanta" class="form-control">
                            <option selected>Região da Planta</option>
                            <option> Semi-árida</option>
                            <option> Cerrado</option>
                            <option> Sul/Suldeste</option>
                            <option> Norte/Nordeste</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <select id="inputState" class="form-control">
                            <option selected>Flor</option>
                            <option> Amarela</option>
                            <option> Vemelha</option>
                            <option> Rosa</option>
                            <option> Não possui</option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-row" style="margin-left: 15px">
                        <a href="PlantaEx.html" type="button" class="btn btn-success">BUSCAR</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
    <!-- Busca -->


    <!-- modal de login -->
    <div class="modal" id="minha-janela">
        <div class="modal-dialog modal-sm" >
        <div class="modal-content">
        
          <div class="modal-header">
            <button  align="center" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
            <h3 align="center">Login do Usuário  <span class="glyphicon glyphicon-user " aria-hidden="true"></span></h3>
          </div>

          <div class="modal-body">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email">
              <label for="password">Senha</label>
              <input type="password" class="form-control" id="password">
            </div>
          </div>

          <div class="modal-footer">
            <a href="indexCactus.html" type="button" class="btn btn-success" data-dismiss="modal">Entrar</a>
            <br><br>  
            <p align="center"> não tem cadastro? <a href="cadUser.html">cadastre-se</a></p>
          </div>

        </div>
        </div>
        </div>
        <!-- fim do modal de login -->



        <!-- footer -->
    <footer class="footer">
      <div class="container">
        <center><span class="text-muted">
        © 2018 lays e francis.</span>
      </div></center>
    </footer>

@endsection
