<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestProdutos;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;




class ProdutoController extends Controller
{
    //
    public function index(Request $request){

        if($request){
            $query = trim($request->get('pesText'));
            $produtos = DB::table('produtos as p')
            ->join('categorias as c', 'p.id','=','c.id')
            ->select('p.idprodutos', 'p.nome', 'p.codigo','p.estoque','c.nome as categorias','p.descricao','p.imagem',
            'p.estado')
            ->where('p.nome','LIKE','%'.$query.'%')
            ->where('estado', '=', 'Ativo')
            ->orderBy('idprodutos', 'desc')
            ->paginate(6);
            return view('estoque.produto.index', [
    			"produtos"=>$produtos, "pesText"=>$query
    			]);
    
        }



    }
    public function criar(){

          $categorias = DB::table('categorias')
          ->where('condicao', '=', 'Ativo')
          ->get();


        return view('estoque.produto.create',compact('categorias'));
    }
    public function store(RequestProdutos $request ){
        
        $produto = new Produto();
        $produto -> id = $request->get('id');
        $produto ->nome = $request ->get('nome');
        $produto ->codigo = $request->get('codigo');
         $produto ->estoque = $request->get('estoque');
         $produto -> descricao = $request->get('descricao');
         $produto ->estado = 'Ativo';

       
         if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $num = rand(0,9999);
            $dir = "imagens/produtos/";
            $ext = $imagem->guessClientExtension();
            $nomeImagemCriar = 'imagem_'.$num.".".$ext;
            $imagem->move($dir,$nomeImagemCriar);
            $produto['imagem'] = $dir."/".$nomeImagemCriar;
    
           
          }
    
           $produto->save();
           return redirect()->route('produtos')
           ->with('errors', 'Apartamento está com paciente no momento');
        

    
    }
    public function show($id){
        $produtos = Produto::find($id);
        return view('estoque.produto.index',compact('produtos'));


    }
    public function editar($id){
        $produto = Produto::find($id);

        $categorias = DB::table('categorias')
        ->where('condicao', '=', 'Ativo')
        ->get();


        return view('estoque.produto.edit', compact('produto', 'categorias'));



    }

    public function update(Request $request,$id){
        $produto=Produto::findOrFail($id);
    	
    	$produto->id=$request->get('id');
    	$produto->codigo=$request->get('codigo');
    	$produto->nome=$request->get('nome');
    	
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $num = rand(0,9999);
            $dir = "imagens/produtos/";
            $ext = $imagem->guessClientExtension();
            $nomeImagemCriar = 'imagem_'.$num.".".$ext;
            $imagem->move($dir,$nomeImagemCriar);
            $produto['imagem'] = $dir."/".$nomeImagemCriar;
    
           
          }
           

    	$produto->update();
    	return redirect()->route('produtos');
    }

    public function delete($id){
        $produto=Produto::findOrFail($id);
    	$produto->estado='Inativo';
    	$produto->update();
    	return Redirect()->route('produtos');
         }

}
