@component('components.nav')
  @endcomponent

@extends('layout.layoutbase')

@section('body')

    <div class="container">
      <div class="al">
      <h3 align="center">Plantas Catalogadas</h3>
      </div>
      <br>
  <div class="row">
    <div class="col-sm-3">
      <div class="card">
        <img src="{{URL::to('\storage\cactus.png')}}">
      <div class="card-body">
        <h5 class="card-title">CACTUS</h5>
      </div>
      </div>
    </div>

     <div class="col-sm-3">
      <div class="card">
        <img src="{{URL::to('\storage\cactus.png')}}">
      <div class="card-body">
        <h5 class="card-title">CACTUS</h5>
      </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <img src="{{URL::to('\storage\cactus.png')}}">
      <div class="card-body">
        <h5 class="card-title">CACTUS</h5>
      </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <img src="{{URL::to('\storage\cactus.png')}}">
      <div class="card-body">
        <h5 class="card-title">CACTUS</h5>
      </div>
      </div>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-3">
      <div class="card">
        <img src="{{URL::to('\storage\cactus.png')}}">
      <div class="card-body">
        <h5 class="card-title">CACTUS</h5>
      </div>
      </div>
    </div>

     <div class="col-sm-3">
      <div class="card">
        <img src="{{URL::to('\storage\cactus.png')}}">
      <div class="card-body">
        <h5 class="card-title">CACTUS</h5>
      </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <img src="{{URL::to('\storage\cactus.png')}}">
      <div class="card-body">
        <h5 class="card-title">CACTUS</h5>
      </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <img src="{{URL::to('\storage\cactus.png')}}">
      <div class="card-body">
        <h5 class="card-title">CACTUS</h5>
      </div>
      </div>
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
