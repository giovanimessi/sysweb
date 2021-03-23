@extends('layouts.admin')
@section('conteudo')

<div class="row">
   <div class=" col-lg-6 col-md-8 col-sm-8 col-xs-12">
       <h2><span>Criar Clientes</span></h2>
   </div>
</div>
  
        <form method="POST" action="{{route('salvar')}}">
       @csrf
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="nome">
                </div>
            </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  
                    <div class="form-group">
                        <label >Tipo documento:</label>
                        <select name="tipo_documento" class="form-control">
                            <option value="CPF">CPF</option>
                            <option value="RG">RG</option>
                        </select>
                    </div>
               </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  
                <div class="form-group">
                    <label for="num_doc">Número Documento:</label>
                    <input type="text" name="num_doc" class="form-control" placeholder="NUMERO DO DOCUMENTO">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">   
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" class="form-control" placeholder="ENDERECO">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" class="form-control" placeholder="TELEFONE">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" class="form-control" placeholder="EMAIL">
                </div>
            </div>            
                <div class="form-group">
                   
                    <button type="reset" class="btn btn-warning">Cancelar</button> 
                    <button type="submit" class="btn btn-success">Salvar</button> 
                </div>

        </form>
</div>
@endsection