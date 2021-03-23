@extends('layouts.admin')
@section('conteudo')

<div class="row">

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
       <h2><span>Lista de Cliente:<a href="{{route('criaClientes')}}" class="btn btn-success">Adicionar</a></span></h2>

       @include('venda.cliente.filtro')

    </div>
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <div class="table-responsive">
         <table class="table table-striped table-bordered table-condesend table-hover">

            <thead>
                <th>Id</th>
                <th>Cliente:</th>
                <th>Nome</th>
                <th>Tipo Documento</th>
                <th>Número Documento</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </thead>
            @foreach($pessoas as $pes)

            
               <tr>
                <td>{{ $pes->idpessoas}}</td>
                <td>{{$pes->tipo_pessoas}}</td>
                <td>{{ $pes->nome}}</td>
                <td>{{ $pes->tipo_documento}}</td>
                <td>{{ $pes->num_doc}}</td>
                <td>{{ $pes->endereco}}</td>
                <td>{{ $pes->telefone}}</td>
                <td>{{ $pes->email}}</td>

                <td>
                    <a href="{{ route('vendaEditar',$pes->idpessoas)}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href=""data-target="#modal-delete-{{ $pes->idpessoas}}" data-toggle="modal"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
                </td>
                 @include('venda.cliente.modal')
               </tr>
            @endforeach
         </table>
         {{$pessoas->links()}}
     </div>
    </div>   
</div>
@endsection