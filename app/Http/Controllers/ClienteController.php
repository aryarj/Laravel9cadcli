<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente; 

class ClienteController extends Controller
{
    public function index()
    {
        return view('clientes');
    }

    public function store(Request $request)
    {
        
        //dd($request->all());
        
        Cliente::create($request->all());

        return redirect()->route(('novocliente'));
    }
}
