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
            
            'id' => 'required',
            'nome'=>'required|string|max:255',
            'codigo'=>'required',
            'estoque'=>'required| numeric',
            'descricao'=>'required|string|max: 512',
            'avatar' => 'mines:jpeg,bmp,png'

            
        ];
    }
    public function messagem(){
        return [
            
            'id' => 'required',
            'nome'=>'required|string|max:255',
            'codigo'=>'required',
            'estoque'=>'required| numeric',
            'descricao'=>'required|string|max: 512',
            'avatar' => 'mines:jpeg,bmp,png'

            
        ];
        
    }
   }
