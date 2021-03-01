@extends('layouts.admin')
@section('conteudo')
<div class="row">
    <div class="col-lg-8 col-md col-sm-8 col-xs-12">
     <h3>Lista de Categorias<a href="{{route('criar')}}"><button class="btn btn-success">Adicionar</button></a></h3>
     @include('estoque.categoria.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>DESCRIÇÃO</th>
                        <th>STATUS</th>
                        <th>OPÇÕES</th>        
                </thead>

                @foreach($dados as $dado)
                <tr>
                   <td>{{$dado->id}}</td>
                   <td>{{$dado->nome}}</td> 
                    <td>{{$dado->descricao}}</td>
                    <td>{{$dado->condicao}}</td>

                    <td>
                        <a href="{{route('edit',$dado->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="" data-target="#modal-delete-{{$dado->id}}" data-toggle="modal"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
                    </td>

                </tr>

                  @include('estoque.categoria.modal')
                @endforeach
          </table>
          
       </div>
    </div>
</div>
    
@endsection