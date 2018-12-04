@component('components.nav')
@endcomponent

@extends('layout.layoutbase')
@section('body')

<div class="container">
@if(!isset($p))
        <h1>não definido</h1>
    @else
<div class="card alinhado">
<div class="row ">

            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <p></p>
                        <img src="imgs/cacto.jpg" style="width:50%">
                        <h2 class="py-3">{{$p->nomeP}}</h2>
                        <p>Existem 176 gêneros e 2.275 espécies de {{$p->nomeP}}.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Nome Popular: {{$p->nomeP}}</h4>
                <h4 class="pb-5">Nome Científico: {{$p->nomeC}}</h4>
                <h4 class="pb-4">Porte Planta: {{$p->porte}}</h4>
                <h4 class="pb-4">Folha: {{$p->folha}}</h4>
                <h4 class="pb-4">Flor: {{$p->flor}}</h4>
                <h4 class="pb-4">Região Planta: {{$p->regiao}}</h4>


                <div class="">
                        <a href="MeuJardim.html" type="button" class="btn btn-success">ADICIONAR</a>
                    </div>
            </div>
        </div>
      </div>
@endif
@endsection