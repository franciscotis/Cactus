  @component('components.nav')
    @endcomponent

  @extends('layout.layoutbase')

  <h3 align="center">Plantas Catalogadas</h3>
       @section('body')
  <div class="row">
  @foreach($plantas as $p)
    <div class="col-sm-3">
        <div class="card" style="width: 15em; word-wrap: break-word; margin: 5px">
          <img src="{{URL::to('\storage\cactus.png')}}">
        <div class="card-body">
          <h5 class="card-title"><a href="{{route('planta.show',$p->id)}}">{{$p->nomeP}}</a> </h5>
        </div>
        </div>

      </div>
      @endforeach
    </div>
     
</div>


    </div>
          <!-- footer -->
      <footer class="footer">
        <div class="container">
          <center><span class="text-muted">
          © 2018 lays e francis.</span>
        </div></center>
      </footer>

  @endsection
