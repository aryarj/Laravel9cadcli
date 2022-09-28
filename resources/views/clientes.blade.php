@extends('modelos.app')

@section('title','Novo cliente')

@section('content')
<h1>Cadastro de novo cliente</h1>
<form action="{{route('cliente.store')}}" method="POST">
    @include('modelos.form')
</form>
<br>
    <button onclick="window.location.href='{{route('index')}}';">
        Visualizar clientes cadastrados
    </button>


@endsection