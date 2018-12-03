  @extends('layouts.admin')
@section('conteudo')

            <div class="card card2 ">
              <div class="al2">

                <div class="al3">
                  <h1>Adição de Planta</h1>
                </div>
                

                <form method="POST" action="{{route('editarPlanta',$planta->id)}}">
                  @csrf
                  <h3>Informações sobre a Planta</h3>
                  <div class="col col-md-8">
                    <div class="col col-md-7 ">
                      <div class="form-group">    
                        <label for="nomePopular">Nome Popular</label>
                        <input  type="text" class="form-control" id="nomePopular" name="nomePopular" aria-describedby="emailHelp" value="{{$planta->nomeP}}" placeholder="Coloque o nome popular da planta">
                      </div>
                    </div>

                    <div class="col col-md-7">
                      <div class="form-group">

                        <label for="nomeCientifico">Nome Científico</label>
                        <input type="text" class="form-control" id="nomeCientifico" name="nomeCientifico" aria-describedby="emailHelp" value="{{$planta->nomeC}}" placeholder="Coloque o nome Científico da planta">
                      </div>
                      <div class="form-group">

                          <label for="corFolha"><h3>Cor Folha</h3></label>

                          <input type="text" class="form-control" value="{{$planta->folha}}" id="corFolha" name="corFolha" placeholder="Rosa/Amarela">
                        </div>

                        <div class="form-group">

                          <label for="corFlor"><h3>Cor Flor</h3></label>

                          <input type="text" class="form-control" id="corFlor" value="{{$planta->flor}}" name="corFlor" placeholder="Rosa/Amarela">
                        </div>

                          <div class="form-group">

                            <label for="portePlanta"><h3>Porte Planta</h3></label>


                            <select class="form-control" name="portePlanta">
                              <option value="1">Nenhum</option>
                              <option value="2">até 1,5m</option>
                              <option value="3">entre 1,5m e 3m</option>
                              <option value="4">maior que 3m</option>
                            </select>

                          </div> 


                        </div>


                      </div>  
                      <div class="col col-md-7">
                       <div class="form-group">
                      
                      <label><h3>Região Planta</h3></label>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" name="regiao" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Arida
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" name="regiao" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck1">
                          Semi-Árida
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="2" name="regiao" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck1">
                          Desértica
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="3"  name="regiao" id="defaultCheck4">
                        <label class="form-check-label" for="defaultCheck1">
                          Tropical
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="4" name="regiao" id="defaultCheck5">
                        <label class="form-check-label" for="defaultCheck1">
                          Norte
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="5" name="regiao"  id="defaultCheck6">
                        <label class="form-check-label" for="defaultCheck1">
                          Nordeste
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="6" name="regiao" id="defaultCheck7">
                        <label class="form-check-label" for="defaultCheck1">
                          Sul
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="7" name="regiao" id="defaultCheck8">
                        <label class="form-check-label" for="defaultCheck1">
                          Sudeste
                        </label>
                      </div>

                      <div class="botaoo">
                        <button type="submit" class="btn btn-success">Editar</button>
                      </div>
                        </div>
                    </div>
                </form>
                </div>
              </div>
            </div>
@endsection