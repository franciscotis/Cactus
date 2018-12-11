  @component('components.nav')
    @endcomponent

  @extends('layout.layoutbase')
  <img src="imgs/banner2.png">
  @section('body')
@if(auth()->user()!=null)

  <h3 style="font-family: 'Poppins', sans-serif;" align="center">Plantas Catalogadas</h3>

  <div class="row">
  @foreach($plantas as $p)
    <div class="col-sm-3">
        <div class="card" style="width: 15em; word-wrap: break-word; margin: 5px">
          <img width=100% src="../storage/{{$p->imagem}}">
        <div class="card-body">
          <h5 class="card-title"><a style="font-family: 'Poppins', sans-serif; color: black; " href="{{route('planta.show',$p->id)}}">{{$p->nomeP}}</a> </h5>
        </div>
        </div>

      </div>
      @endforeach
    </div>
  @else
      <div class="image parallax2">
          <img  src="imgs/pl.png">
          <a id="botao" href="{{route('login')}}" class="btn btn-success">Faça o Login</a>
      </div>
      @endif
          <!-- footer -->
      <footer class="footer">
        <div class="container">
          <center><span class="text-muted">
          © 2018 lays e francis.</span>
          </center>
        </div>
      </footer>

  @endsection
