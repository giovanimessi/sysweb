
@extends('layouts.admin')
@section('conteudo')

    <div class="row">
        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h2><span>Editar Produto</span></h2>

        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <br />
    @endif
    <div class="col-lg-6 col-md-6 col-sm-6 col-lx-6">
    <form method="POST" action="{{route('upd',$produto->idprodutos)}}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                    <label for="Nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome do produto" value={{$produto->nome}}>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select name="id" class="form-control">
                    @foreach ($categorias as $cat)
                    <option value="{{$cat->id}}">{{$cat->nome}}</option>
                        
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" name="codigo" class="form-control" placeholder="codigo do  produto" value={{$produto->codigo}}>
            </div>
            <div class="form-group">
                <label for="estoque">Estoque:</label>
                <input type="text" name="estoque" class="form-control" placeholder="estoque do  produto" value={{$produto->estoque}}>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" class="form-control" placeholder="descricao do  produto" value={{$produto->descricao}}>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="imagem">Imagem</label>
                    <input type="file" name="imagem" 
                    class="form-control">
                        @if(($produto->imagem)!="")
                            <img src="{{asset($produto->imagem)}}" width="200px">
                        @endif
                </div>
           </div>

            <div class="form-group">
                <button class="btn btn-warning"type="reset">Limpar</button>
                <button class="btn btn-success"type="submit">Salvar</button>
            </div>
        </form>

    </div>

@endsection