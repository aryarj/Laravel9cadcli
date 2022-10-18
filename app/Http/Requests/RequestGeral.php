<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestGeral extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->id;
        
        return [
            //Maneira: numa mesma linha com a barra de separação
            'name'=>'required|string|max:255|min:3',
            //Outra maneira: com array associativo
            'email'=>[
                'required',
                'email',
                "unique:clientes,email,{$id},id",
            ],
            'cpf'=>[
                'required',
                'max:11',
                "unique:clientes,cpf,{$id},id",
            ]
        ];
    }
}
