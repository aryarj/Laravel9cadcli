@extends('modelos.app')

@section('title','Novo cliente')

@section('content')
<h1>Cadastro de novo cliente</h1>

<!--Inclui mensagens de erro-->
@include('modelos.errors')

<form action="{{route('cliente.store')}}" method="POST">
    @include('modelos.form')
</form>
<br>
    <button onclick="window.location.href='{{route('index')}}';">
        Visualizar clientes cadastrados
    </button>
<br>

@endsection