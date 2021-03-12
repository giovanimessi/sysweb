<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProdutos extends FormRequest
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
        return [
            //
            'id' => 'required',
            'nome'=>'required|max = 100',
            'codigo'=>'required| max = 50',
            'estoque'=>'required| numeric',
            'descricao'=>'required| max = 512',
            'imagem' => 'mines:jpeg,bmp,png'

            
        ];
    }
}
