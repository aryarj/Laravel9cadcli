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
        //E ordenando na ordem decrescente
        //Se quiser paginar, utilizar a função paginate() no final ao invéz de get()
        $cliente = Cliente::where('name', 'LIKE',"%{$request->search}%")
        ->orderby('name','ASC')->paginate(5);
        
        //$cliente = Cliente::paginate(5);//funciona também como o: $cliente = DB::table('clientes')->paginate((5));
        // mas nesse último caso precisará chamar no início: use Illuminate\Support\Facades\DB;
        

        return view('index', compact('cliente'));
        
    }

    public function edit($id)
    {
      if(!$cliente=Cliente::find($id))
      {
        return redirect()->route('index');
      }
      return view('edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
      if(!$cliente=Cliente::find($id))
      {
        return redirect()->route('index');
      }
      $cliente->update($request->all());

      return redirect()->route('index');
    }

    public function delete($id)
    {
      if(!$cliente=Cliente::find($id))
      {
        return view('index');
      }
      
      return view('clienteConfirmaExclusao', compact('cliente'));
    }

    public function delete2($id)
    {
      if(!$cliente=Cliente::find($id))
      {
        return view('index');
      }

      $cliente->delete();
      
      return view('clienteConfirmaExclusao2');
    }
}
