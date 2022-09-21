@extends('app')

@section('title','Novo usuário')

@section('content')
<h1>Cadastro de novo cliente</h1>
<form action="{{route('cliente.store')}}" method="POST">
@csrf
    <input type="text" name="name" required placeholder="Nome:" value="{{$cliente->name ?? old('name')}}">
    <input type="email" name="email" required placeholder="E-mail:" value="{{$cliente->email ?? old('email')}}">
    <input type="text" name="cpf" required placeholder="cpf:" value="{{$cliente->cpf ?? old('cpf')}}">
    <button type="submit">Enviar</button>
</form>


@endsection