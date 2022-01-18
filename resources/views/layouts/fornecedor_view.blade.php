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
                        <div class="ml-4 text-lg leading-7 font-semibold" style="color:darkorange">Visualizar Fornecedor</div>
                    </div>
                    <div class="ml-1">
							<div class="mt-2 text-gray-600 dark:text-gray-400">         
                        <table id="data_table" class="table table-striped">                            
                            <tr>
                                <th>ID</th>
                                <td>{{$fornecedor->id}}<td>
                            </tr>
                            <tr>
                                <th>Nome</th>
                                <td>{{$fornecedor->nome}}<td>
                            </tr>
                            <tr>
                                <th>Endereco</th>
                                <td>{{$fornecedor->endereco}}<td>
                            </tr>
                            <tr>
                                <th>Contato</th>
                                <td>{{$fornecedor->contato}}<td>
                            </tr>
                            <tr>
                                <th>CNPJ</th>
                                <td>{{$fornecedor->cnpj}}<td>
                            </tr>
                        </table>    
                    </div>
                    </div>            
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection