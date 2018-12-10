@component('components.nav')
@endcomponent

@extends('layout.layoutbase')
@section('body')

<div class="container">
@if(!isset($u))
        <h1>não definido</h1>
    @else
<div class="row ">

            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <p></p>
                        <img src="imgs/cacto.jpg" style="width:50%">
                        <h2 class="py-3">{{$u->nome}}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-8 py-5 border">
                <h4 class="pb-3">Nome: {{$u->nome}}</h4>
                <h4 class="pb-3">Email: {{$u->email}}</h4>
            </div>
            <div class="">
                        <a href="{{ route('editarPerfil') }}" type="button" class="btn btn-success">EDITAR</a>
                </div>
        </div>
@endif
@endsection