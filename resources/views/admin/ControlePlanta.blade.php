  @extends('layouts.admin')
@section('conteudo')

            <div class="card card2">
              <h1 id="al">Controle de Plantas</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Popular</th>
                    <th scope="col">Nome Cientifico</th>
                    <th scope="col">Folha</th>
                    <th scope="col">Flor</th>
                    <th scope="col">Porte</th>
                    <th scope="col">Região</th>
                    <th scope="col">Adicionado Em</th>
                    <th scope="col">Ação</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($plantas as $planta)
                     <tr>
                      <th>{{$planta->id}}</th>
                      <th>{{$planta->nomeP}}</th>
                      <th>{{$planta->nomeC}}</th>
                      <th>{{$planta->folha}}</th>
                      <th>{{$planta->flor}}</th>
                      <th>{{$planta->porte}}</th>
                      <th>{{$planta->regiao}}</th>
                      <th>{{$planta->created_at}}</th>
                      <th><a href="{{route('apagarPlanta',$planta->id)}}" class="btn btn-danger">Deletar</a></th>
                      <th><a href="{{route('editarPlanta',$planta->id)}}" class="btn btn-info">Editar</a></th>

                  </tr>
                  @endforeach
                </tbody>
              </table>     
            </div>  

          </div>

                


@endsection



