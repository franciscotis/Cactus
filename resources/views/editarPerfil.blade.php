@component('components.nav')
  @endcomponent

@extends('layout.layoutbase')

@section('body')
<div class="container">
<div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="imgs/p6.png" style="width:30%">
                        <h2 class="py-3">Cadastre-se</h2>
                        <p>Cadastre-se e aprenda a cuidar das suas plantas de maneira interativa e prática.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Editar perfil</h4>
                 <form method="POST" action="{{ route('editarPerfil',Auth::user()->id) }}">
                        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="{{$user->name}}" required autofocus>
                            </div>

                        <div class="form-group col-md-6">
                          <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="{{$user->name}}" required>
                        </div>
                      </div>
                    <div class="form-row">
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                              </div>
                    
                          </div>
                    </div>
                     <button type="submit" class="btn btn-primary">
                                    {{ __('Salvar') }}
                                </button>
                            </form>

     <!-- footer -->
    <footer class="footer">
      <div class="container">
        <center><span class="text-muted">
        © 2018 lays e francis.</span>
      </div></center>
    </footer>
@endsection
