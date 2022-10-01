@extends('modelos.app')

@section('title','Listagem')

@section('content')
<h1>Exclusão de cliente</h1>
<p>Excluir cliente  {{$cliente->name}}?</p>
    <li>
        {{$cliente->name}} - 
        {{$cliente->cpf}} - 
        {{$cliente->email}}
        <form action="{{route('cliente.delete2',$cliente->id)}}" method="POST">
            @method('DELETE')
            @csrf
            | <button type="submit">
                Sim
            </button>
        </form>
        | <button onclick="window.location.href='{{route('index')}}';">
            Não
        </button>
        
        
        
    </li>

    

<br>


@endsection