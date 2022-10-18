<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cpf',
    ];
    
    public function getCliente($search)
    {
        
        //Se quiser paginar, utilizar a função paginate() no final ao invéz de get()
        //Ordenando na ordem crescente do nome, utilizando: orderby('name','ASC')
        //$cliente = Cliente::where('name', 'LIKE',"%{$request->search}%")
        //->orderby('name','ASC')->paginate(5);

        //$cliente = Cliente::where(function ($query) use ($search)
        
        $clientePesq = $this->where(function($query) use ($search)
        {
            if($search)
            {
              $query->where('name', 'LIKE',"%{$search}%")
              ->orWhere('email', 'LIKE',"%{$search}%")
              ->orWhere('cpf', 'LIKE',"%{$search}%");
            }
        })->orderby('name','ASC')->paginate(5);

        return $clientePesq;
    }
}
