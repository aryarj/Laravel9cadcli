@extends('app')

@section('title','Confirmação')

@section('content')
<h1>Cliente cadastrado com sucesso!</h1>
    <button onclick="window.location.href='{{route('novocliente')}}';">
        Incluir novo cliente
    </button>
    <br><br>
    <button onclick="window.location.href='{{route('index')}}';">
        Visualizar clientes cadastrados
    </button>
    <br>
    
@endsection