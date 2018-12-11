@component('components.nav')
@endcomponent

@extends('layout.layoutbase')
@section('body')

<div class="container">
@if(!isset($p))
        <h1>não definido</h1>
    @else
<div class="row ">

            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <p></p>
                        <img width=100% src="../storage/{{$p->imagem}}">                        <h2 class="py-3">{{$p->nomeP}}</h2>
                        <p>Existem 176 gêneros e 2.275 espécies de {{$p->nomeP}}.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 py-5 border">
                <h4 class="pb-3">Nome Popular: {{$p->nomeP}}</h4>
                <h4 class="pb-3">Nome Científico: {{$p->nomeC}}</h4>
                <h4 class="pb-3">Porte Planta: {{$p->porte}}</h4>
                <h4 class="pb-3">Folha: {{$p->folha}}</h4>
                <h4 class="pb-3">Flor: {{$p->flor}}</h4>
                <h4 class="pb-3">Região Planta: {{$p->regiao}}</h4>
            </div>
        </div>
@endif
@endsection