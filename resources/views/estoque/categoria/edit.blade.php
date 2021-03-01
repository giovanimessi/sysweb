@extends('layouts.admin')

@section('title', 'Criar Categoria')
@section('conteudo')

<div class="container">
    
<h2><span>Editar Categoria</span></h2>


<form method="POST" action="{{route('update',$dados->id)}}">
     @csrf
  
    <input type="hidden" name="_method" value="put">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="{{$dados->nome}}" required placeholder="digite seu nome...">
        
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
      <textarea  name="descricao" {{ old('descricao',$dados->descricao) }} id="descricao"  class="form-control"  required rows="12" cols="64"></textarea>
        
    </div>
     <div class="form-group">
        <label for="condicao">Status</label>
        <input type="checkbox" name ="condicao"  {{isset($dados->condicao) && $dados->condicao == 'Ativo' ? 'checked': ''}} value="true"  value="{{$dados->condicao}}"/>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Atualizar</button>
        <button class="btn btn-danger" type="reset">Cancelar</button>
    
    </div>
</form>
</div>
    
@endsection