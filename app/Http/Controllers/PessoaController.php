<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    //
    public function index(Request $request){

    	if($request){
    		$query=trim($request->get('searchText'));
    		$pessoas=DB::table('pessoas')
    		->where('nome', 'LIKE', '%'.$query.'%')
    		->where('tipo_pessoas', '=', 'Cliente')
    		->orwhere('num_documento', 'LIKE', '%'.$query.'%')
    		->where('tipo_pessoas', '=', 'Cliente')
    		->orderBy('idpessoas', 'desc')
    		->paginate(7);
    		return view('venda.cliente.index', [
    			"pessoas"=>$pessoas, "searchText"=>$query
    			]);
    	}

    }
}
