@extends('layouts.admin')
@section('conteudo')
            <div class="card card2 ">
              
              <div class="al2">
                <div class="al3">
                <h1>Adição de Administrador</h1>
              </div>
                <h3>Informações Pessoais</h3>
                <form>
                    <div class="col col-md-8">
                    <div class="col col-md-7 ">
<div class="form-group">    
    <label for="exampleInputEmail1">Nome</label>
    <input  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Coloque o nome do administrador">
  </div>
</div>

<div class="col col-md-7">
  <div class="form-group">
    
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Coloque o email do administrador">
  </div>
</div>
 <div class="col col-md-7">
  <div class="form-group">
   
    <label for="exampleInputEmail1">Usuário</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Coloque o nome de usuário do administrador">
  </div> 
</div>

</div>

<div class="col col-md-4">
  <div class="recuado">
  <h3>Permissões</h3>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Controle de Usuários</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck2">
    <label class="form-check-label" for="exampleCheck2">Adição de Administradores</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck3">
    <label class="form-check-label" for="exampleCheck3">Controle de Plantas</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck4">
    <label class="form-check-label" for="exampleCheck4">Adição de Plantas</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck5">
    <label class="form-check-label" for="exampleCheck5">Relatório</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck6">
    <label class="form-check-label" for="exampleCheck6">Backup</label>
  </div>
</div>
</div>



    
            </div>  
            <div class="botaoo">
  <button type="submit" class="btn btn-success">Cadastrar</button>

</div>
          </div>
          </form>


@endsection



