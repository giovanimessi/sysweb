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

        

            return view('estoque.categoria.index');
        

    }
      //pesquisar pelo botao de filtro
    public function search(Request $request){
    $filtro = Categoria::where('name','=','LIKE', "%{$request->searchText}%")
    ->where('condicao', '=', '1')
    ->orderBy('id', 'desc')
    ->paginate(7);

    return view('estoque.categoria.index', compact($filtro));



      

    }
    public function  create(){
        return view('estoque.categoria.create');


    }
    public function store(Request $request){

        $categorias = new  Categoria();
        $categorias ->nome = $request->get('nome');
        $categorias->descricao = $request->get('descricao');
        $categorias->condicao = 1;
        $categorias->save();
        return redirect()->route('admin.categoria');
        



    }
    public function show($id){
       //exibicao com base no id
        $p = Categoria::find($id);

        return view('admin.categorias.show',compact('p'));

    }
    public function edit($id){

        $p = Categoria::find($id);

        return view('admin.categorias.edit',compact('p'));

    }
    public function update(Request $request,$id){
        $p = Categoria::find($id);
        $categorias = new  Categoria();
        $categorias ->nome = $request->get('nome');
        $categorias->descricao = $request->get('descricao');
        $categorias->condicao = 1;
        $categorias->update();
        return redirect()->route('admin.categoria');


    }
    public function destroy($id){
        $categorias = new Categoria();
        $p = Categoria::find($id);
        $categorias->condicao = 0;
        $categorias->update();
        return redirect()->route('admin.categoria');


        
    }
}
