@extends('modelos.app')

@section('title',"Edição de {$cliente->name}")

@section('content')
<h1>Editar cliente {{$cliente->name}}</h1>

<!--Inclui mensagens de erro-->
@include('modelos.errors')

    <form action="{{route('cliente.update',$cliente->id)}}" method="POST">
        <!--<input type="hidden" name="_method" value="PUT">-->
        <!--Que é igual a: @method('PUT')-->
        @method('PUT')
        @include('modelos.form')
    </form>
    <br>
    <button onclick="window.location.href='{{route('index')}}';">
        Visualizar clientes cadastrados
    </button>
    
@endsection