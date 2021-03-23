<?php

namespace App\Http\Controllers;


use App\Http\Requests\RequestPessoa;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PessoaController extends Controller
{
    //
    public function index(Request $request){

        if($request){
    		$query=trim($request->get('searchText'));
    		$pessoas=DB::table('pessoas')
    		->where('nome', 'LIKE', '%'.$query.'%')
    		->where('tipo_pessoas', '=', 'Cliente')
    		->orwhere('num_doc', 'LIKE', '%'.$query.'%')
    		->where('tipo_pessoas', '=', 'Cliente')
    		->orderBy('idpessoas', 'desc')
    		->paginate(7);
    		return view('venda.cliente.index', [
    			"pessoas"=>$pessoas, "searchText"=>$query
    			]);
    	}


    }
    public function create(){

        return view('venda.cliente.create');
    }
       public function store(RequestPessoa $request){

        $pessoas = new Pessoa();
        $pessoas ->tipo_pessoas = 'Cliente';
        $pessoas ->nome = $request->get('nome');
        $pessoas ->tipo_documento = $request->get('tipo_documento').
        $pessoas ->num_doc  = $request->get('num_doc');
        $pessoas ->endereco = $request->get('endereco');
        $pessoas ->telefone = $request->get('telefone');
        $pessoas ->email = $request->get('email');
      
         
        $pessoas->save();
        return redirect()->route('clientes');

       }
       public function show($id){
           $pessoas = Pessoa::find($id);

           return view('venda.cliente.index', ['pessoas' => $pessoas]);

       }
       public function editar($id){
       
        $pessoas = Pessoa::find($id);

        return view('venda.cliente.edite', compact('pessoas'));

       }

       public function update(RequestPessoa $request,$id){
        
        $pessoas = Pessoa::find($id); 
        $pessoas = new Pessoa();
        $pessoas ->tipo_pessoas = 'Cliente';
        $pessoas ->nome = $request->get('nome');
        $pessoas ->tipo_documento = $request->get('tipo_documento').
        $pessoas ->num_doc  = $request->get('num_doc');
        $pessoas ->endereco = $request->get('endereco');
        $pessoas ->telefone = $request->get('telefone');
        $pessoas ->email = $request->get('email');
      
         
        $pessoas->save();
        return redirect()->route('clientes');
       }
       public function delete($id){
           $pessoas = Pessoa::find($id)->delete();
           return redirect()->route('clientes');
       }
 

}
