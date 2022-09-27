@extends('app')

@section('title','Listagem')

@section('content')
<h1>Listagem de clientes</h1>
<button onclick="window.location.href='{{route('novocliente')}}';">
    Incluir novo cliente
</button>
<br><br>
@foreach ($cliente as $c)
    <li>
        {{$c->name}} - 
        {{$c->cpf}} - 
        {{$c->email}}
    </li>

    
@endforeach

@endsection