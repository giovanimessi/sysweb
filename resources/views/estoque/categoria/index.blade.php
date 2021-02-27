@extends('layouts.admin')
@section('conteudo')
<div class="row">
    <div class="col-lg-8 col-md col-sm-8 col-xs-12">
     <h3>Lista de Categorias<a href="{{route('criar')}}"><button class="btn btn-success">Adicionar</button></a></h3>
     @include('estoque.categoria.search')

 

    </div>
</div>
    
@endsection