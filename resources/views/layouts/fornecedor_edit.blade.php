@extends('templates.principal')
@section('title','Fornecedor')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-8xl mx-auto sm:px-8 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-3 md:grid-cols-3">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <svg style="color:darkorange" xmlns="http://www.w3.org/2000/svg" width="30" height="30"  stroke="currentColor"  class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold" style="color:darkorange">Editar Fornecedor</div>
                    </div>
                    <div class="ml-1">
						<div class="mt-2 text-gray-600 dark:text-gray-400">
                            <form method='POST' action="{{ url('fornecedores/'.$fornecedor->id.'/update') }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="col-auto g3">
                                                <label class="form-label">Nome</label>
                                                    <input type="text" class="form-control"  name="nome" value="{{$fornecedor->nome}}" placeholder="Nome Empresa">                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="col-auto g3">
                                                <label class="form-label">Endereco</label>
                                                    <input type="text" class="form-control" name="endereco" value="{{$fornecedor->endereco}}" placeholder="Rua">                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="col-auto g3">
                                                <label class="form-label">Numero</label>
                                                <input type="number" class="form-control" name="num" value="{{$fornecedor->num}}" placeholder="001">                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <div class="col-auto g3">
                                                <label class="form-label">Bairro</label>
                                                    <input type="text" class="form-control" name="bairro" value="{{$fornecedor->bairro}}" placeholder="Centro">                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-6">                                    
                                    <div class="form-group">
                                        <div class="col-auto g3">
                                            <label class="form-label">CEP</label>
                                                <input type="text" class="form-control" name="cep" value="{{$fornecedor->cep}}" placeholder="000000-00">                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="col-auto g3">
                                            <label class="form-label">Contato</label>
                                                <input type="email" class="form-control" name="contato" value="{{$fornecedor->contato}}" placeholder="empresa@empresa.com.br">                                            
                                        </div>
                                    </div>
                                </div>
                                </div>                          
                               
                                <div class="row">
                                    <div class="col-6">
                                    <div class="form-group ">
                                        <div class="col-auto g3">
                                            <label class="form-label">CNPJ</label>
                                                <input type="text" class="form-control" name="cnpj" value="{{$fornecedor->cnpj}}" placeholder="000.000.0000.00.00-00">                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="col-auto g3">
                                            <label class="form-label">Inscrição</label>
                                                <input type="text" class="form-control" name="insc" value="{{$fornecedor->insc}}" placeholder="00000.0000.00">                                            
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-6">
                                    <div class="form-group ">
                                        <div class="col-auto g3">
                                            <label class="form-label">Telefone</label>
                                                <input type="text" class="form-control" name="tel" value="{{$fornecedor->tel}}" placeholder="(00)0000-0000">                                            
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="col-12 text-center"     style="display: flex;align-items: center;justify-content: center;">
                                        <button type="submit" class="btn btn-success" style="display: flex;align-items: center;">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check-all"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14l.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                            </svg>
                                            Salvar
                                        </button>
                                    </div>
                                </div>
                            </form>                      
                        </div>
                    </div>            
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection