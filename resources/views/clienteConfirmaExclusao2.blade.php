@extends('modelos.app')

@section('title','Confirmação')

@section('content')

    <script language='javascript' type='text/javascript'>
    alert('Cliente excluído com sucesso!');
    window.location.href="{{route('index')}}";
    </script>

@endsection