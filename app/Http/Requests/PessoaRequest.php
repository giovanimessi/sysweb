<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class PessoaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

        public function rules()
        {
            return [
                //

                'tipo_pessoas' => 'required|string|max:255',
                'nome'=>'required|string|max:255',
                'tipo_documento' => 'max:20',
                'num_documento' => 'max:20',
                'endereco' => 'max:100',
                'telefone' => 'max:20',
                'email' => 'max:100'
            
                
            ];
        }
        public function message(){
    
            return [
                
              
                'tipo_pessoas' => 'required|string|max:255',
                'nome'=>'required|string|max:255',
                'tipo_documento' => 'max:20',
                'num_documento' => 'max:20',
                'endereco' => 'max:100',
                'telefone' => 'max:20',
                'email' => 'max:100'
        
            ];
        }
    }
    
