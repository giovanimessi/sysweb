
@extends('layouts.admin')
@section('conteudo')

    <div class="row">
        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h2><span>Novo Produto</span></h2>

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
    <form method="POST" action="{{route('save')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                    <label for="Nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome do produto">

                    @error('nome')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>  
            
                    @enderror
                  

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
                <input type="text" name="codigo" class="form-control" placeholder="codigo do  produto">
                 
                @error('codigo')
                <div class="invalid-feedback">
                   {{$message}}
                </div>  
        
                @enderror

            </div>
            <div class="form-group">
                <label for="estoque">Estoque:</label>
                <input type="text" name="estoque" class="form-control" placeholder="estoque do  produto">
                   
                @error('estoque')
                <div class="invalid-feedback">
                   {{$message}}
                </div>  
                @enderror

            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" class="form-control" placeholder="descricao do  produto">
                @error('descricao')
                <div class="invalid-feedback">
                   {{$message}}
                </div>  
        
                @enderror
            </div>
            <div class="form-group">
                <label for="label">Imagem:</label>
                <input type="file" name="imagem"  class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-warning"type="reset">Limpar</button>
                <button class="btn btn-success"type="submit">Salvar</button>
            </div>
        </form>
    </div>
@endsection