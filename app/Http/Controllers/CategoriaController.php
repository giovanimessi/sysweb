<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Categoria;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoriaForm;
use Illuminate\Support\Facades\DB;



class CategoriaController extends Controller
{
    //
PUBLIC function __construct(){

}
  
    public function index(Request $request){
        $dados = Categoria::all();
        $dados = Categoria::where('nome','LIKE', '%'.$request->search.'%')
      ->where('condicao', '=', 'Ativo')
      ->orderBy('id', 'desc')
      ->paginate(5);
   
    return view('estoque.categoria.index', compact('dados'));

    // $dados = DB::table('categorias')->paginate(5);

    // return view('estoque.categoria.index', ['dados' => $dados]);

    }
    public function search(Request $request){

      $dados = Categoria::where('nome','LIKE', '%'.$request->search.'%')
      ->where('condicao', '=', 'Ativo')
      ->orderBy('id', 'desc')
      ->paginate(5);


    return view('estoque.categoria.index', compact('dados'));

  }
      //pesquisar pelo botao de filtro

    // create 
    public function  create(){
        return view('estoque.categoria.create');


    }
    public function store(CategoriaForm $request){

        $categorias = new  Categoria();
      $dados = $request->all();

      if(isset($dados['condicao'])){
        $dados['condicao'] = 'Ativo'; 
      }else{
        $dados['condicao'] = 'Inativo';
      }
      Categoria::create($dados);
        return view('estoque.categoria.create',compact('dados'));
        
    }
 
    public function editar($id){

        $dados = Categoria::find($id);
        

        return view('estoque.categoria.edit',compact('dados'));

    }
    public function update(Request $request,$id){

        
      $info = $request->all();

      if(isset($info['condicao'])){
        $info['condicao'] = 'Ativo'; 
      }else{
        $info['condicao'] = 'Inativo';
      }

      Categoria::find($id)->update($info);
      
       return redirect()->route('estoque.categoria');


    }

    public function delete($id){
    Categoria::find($id)->delete();
    return redirect()->route('estoque.categoria');

    }
}
