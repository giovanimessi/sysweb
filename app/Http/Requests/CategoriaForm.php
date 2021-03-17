<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaForm extends FormRequest
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
            'nome'=>'required|string|max:255',
            'descricao'=>'required|string|max: 512',
            
            
        ];
    }
    public function message(){

        return [
            
          
            'nome'=>'required|string|max:255',
            'descricao'=>'required|string|max: 512',
           
        ];
    }
}
