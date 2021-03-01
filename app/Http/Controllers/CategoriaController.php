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
    public function index(){
        $dados = Categoria::all();
      
         
    return view('estoque.categoria.index', compact('dados'));

    }
      //pesquisar pelo botao de filtro
    public function search(Request $request){

        $dados = Categoria::where('nome','LIKE', '%'.$request->search.'%')
        ->where('condicao', '=', 'Ativo')
        ->orderBy('id', 'desc')
        ->paginate(5);

      return view('estoque.categoria.index', compact('dados'));


        // if($request){
    	// 	$query=trim($request->get('search'));
    	// 	$categorias=DB::table('categoria')
    	// 	->where('nome', 'LIKE', '%'.$query.'%')
    	// 	->where('condicao', '=', '1')
    	// 	->orderBy('idcategoria', 'desc')
    	// 	->paginate(7);
    	// 	return view('estoque.categoria.index', [
    	// 		"categoria"=>$categorias, "search"=>$query
    	// 		]);
    	// }

   

    }
    // create 
    public function  create(){
        return view('estoque.categoria.create');


    }
    public function store(Request $request){
        $categorias = new  Categoria();
        
        // if(isset($categorias['condicao'])){
        //     $categorias['condicao'] = 'Ativo'; 
        //   }else{
        //     $categorias['condicao'] = 'Inativo';
        //   }
         
        //  $categorias ->nome = $request->get('nome');
        //  $categorias->descricao = $request->get('descricao');
        // $categorias->save();


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

        // $p = Categoria::find($id);
        // $categorias = new  Categoria();
        // $categorias ->nome = $request->get('nome');
        // $categorias->descricao = $request->get('descricao');
        // $categorias->condicao = 1;
        // $categorias->update();
        // return redirect()->route('admin.categoria');

        
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
