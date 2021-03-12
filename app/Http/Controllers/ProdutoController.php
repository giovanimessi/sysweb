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
            ->paginate(3);
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
    public function store(Request $request ){
        $produtos = new Produto();
        $produtos -> id = $request->get('id');
        $produtos ->nome = $request ->get('nome');
        $produtos ->codigo = $request->get('codigo');
         $produtos ->estoque = $request->get('estoque');
         $produtos -> descricao = $request->get('descricao');
        //  $produtos ->estado = 'Ativo';

        if($request->hasfile('imagem')){
            $imagem = $request->file('imagem');
            $imagem->move(public_path().'/imagens/produtos/', 
    			$imagem->getClientOriginalName());
    		$produtos->imagem=$imagem->getClientOriginalName();
    	
        }

           $produtos->save();
           return redirect()->route('produtos');

    
    }
    public function show($id){
        $produtos = Produto::find($id);
        return view('estoque.produto.index',compact('produtos'));


    }
}
