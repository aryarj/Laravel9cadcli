@extends('modelos.app')

@section('title','Confirmação')

@section('content')

    <script language='javascript' type='text/javascript'>
    alert('Cliente cadastrado com sucesso!');
    window.location.href="{{route('novocliente')}}";
    </script>

@endsection