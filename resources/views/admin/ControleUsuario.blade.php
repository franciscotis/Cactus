@extends('layouts.admin')
@section('conteudo')
            <div class="card card2">
              <h1 id="al">Controle de Usuários</h1>
              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Inscrição</th>
      <th scope="col">Ação</th>


    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th>{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
      <td>
        <a href="{{route('apagarUsuarioAdmin',$user->id)}}"class="btn btn-danger">Apagar Usuário</a>
    </td>
      
    </tr>

    @endforeach
    
  </tbody>
</table>     
            </div>  

          </div>





@endsection



