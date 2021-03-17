@extends('layouts.admin')

@section('title', 'Criar Categoria')
@section('conteudo')

<div class="container">
    
<h2><span>Adiconar Categoria</span></h2>

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


<form method="POST" action="{{route('adicionar')}}">
    @csrf

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" required placeholder="digite seu nome...">
    
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
      <textarea name="descricao" id="descricao" class="form-control" required rows="12" cols="64"></textarea>
        
    </div>
     <div class="form-group">
        <label for="condicao">Status</label>
        <input type="checkbox" name ="condicao" {{isset($dados->condicao) && $dado->condicao == 'Ativo' ? 'checked': ''}} value="true"/>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Salvar</button>
        <button class="btn btn-warning" type="reset">Cancelar</button>

    </div>

</form>


</div>
    
@endsection