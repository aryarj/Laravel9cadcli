@extends('modelos.app')

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
        | <button onclick="window.location.href='{{route('cliente.edit',$c->id)}}';">
            Editar cliente
        </button>
        | <button onclick="window.location.href='{{route('cliente.delete',$c->id)}}';">
            Apagar cliente
        </button>
        
    </li>

    
@endforeach
<br>
{{$cliente->links()}}

@endsection