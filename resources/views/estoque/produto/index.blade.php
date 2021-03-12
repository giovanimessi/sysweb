@extends('layouts.admin')
@section('conteudo')

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h2>
            Lista de Produtos <a href='{{route('criar')}}' class="btn btn-success" .mt-2>Adicionar</a>
            <div></div>
            @include('estoque.produto.filtro')
        </h2>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Nome:</th>
                            <th>Código:</th>
                            <th>Categoria:</th>
                            <th>Estoque:</th>
                            <th>Estado:</th>
                            <th>Imagem:</th>
                            <th>Opções:</th>
                        </thead>
                        @foreach($produtos as $prod)
                        <tr>
                            <td>{{$prod->idprodutos}}</td>
                            <td>{{$prod->nome}}</td>
                            <td>{{$prod->codigo}}</td>
                            <td>{{$prod->nome}}</td>
                            <td>{{$prod->estoque}}</td>
                            <td>{{$prod->estado}}</td>
                                <td>
                                    <img src="{{asset('imagens/produtos/'.$prod->imagem)}}" width='100px',height="100px" alt="{{$prod->nome}}" class="img-tumbnail">
                                </td>
                                <td>
                                    <a href="" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="" ><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
                                </td>
                        </tr>
                        @endforeach                  
                    </table>
                    {{$produtos->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection