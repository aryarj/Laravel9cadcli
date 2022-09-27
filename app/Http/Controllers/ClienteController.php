<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente; 

class ClienteController extends Controller
{
    public function incluir()
    {
        return view('clientes');
    }

    public function store(Request $request)
    {        
        //Para incluir os dados no BD
        Cliente::create($request->all());

        return view(('clienteConfirmaInclusao'));
    }

    public function store2()
    {
        return view(('clienteConfirmaInclusao'));
    }

    public function index(Request $request)
    {
        //Uma das formas de pesquisar por filtro
        //E ordenando na ordem decrescente:
        $cliente = Cliente::where('name', 'LIKE',"%{$request->search}%")->orderby('id','DESC')->get();
        
        return view('index', compact('cliente'));
    }
}
