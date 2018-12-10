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
                <h4 class="pb-4">Por favor preencha com seus dados.</h4>
                 <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="{{$user->nome}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group col-md-6">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="{{$user->email}}" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Senha" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirme sua Senha">
                        </div>
                      </div>
                    <div class="form-row">
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="checkbox1" required>
                                  <label class="form-check-label" for="check2">
                                    <small>Eu aceito os termos e condições de uso.</small>
                                  </label>
                                </div>
                                
                              </div>
                    
                          </div>
                    </div>
                     <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
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
