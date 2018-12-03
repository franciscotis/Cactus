@extends('layouts.admin')
@section('conteudo')

          <div class="row">
            <div style="margin-left:500px">
              <div class="row">
                <div class="col-2 col-sm-5 alinhado">
                  <div class="card">
                    <h2>{{$countUser}}</h2>
                    <p class="m-b-0">Usuários Cadastrados</p>

                  </div>
                </div>


                <div class="col-2 col-sm-5 alinhado ">
                  <div class="card">
                    <h2>{{$countPlant}}</h2>
                    <p class="m-b-0">Plantas Catalogadas</p>

                  </div>
                </div>


              </div>
            </div>
          </div>


            <div class="card card2">
              <div id="chart_div"  style="width: 100%; height: 500px;"></div>
  
            </div>  

@endsection



