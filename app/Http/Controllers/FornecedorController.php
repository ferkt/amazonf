<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT * FROM fornecedor
        $fornecedores = DB::table('fornecedor')->select('fornecedor.*')->get();

        return view('layouts.fornecedor_listar',compact('fornecedores',$fornecedores));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.fornecedor_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->bairro = $request->bairro;
        $fornecedor->num = $request->num;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->contato = $request->contato;
        $fornecedor->cep = $request->cep;
        $fornecedor->tel = $request->tel;
        $fornecedor->insc = $request->insc;
        $fornecedor->save();     

        return redirect(route('fornecedores.lista'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fornecedor = Fornecedor::find($id);
        //dd($fornecedor);
        return view('layouts.fornecedor_view',compact('fornecedor',$fornecedor));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedor = Fornecedor::find($id);
        //dd($fornecedor);
        return view('layouts.fornecedor_edit',compact('fornecedor',$fornecedor));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->fill($request->all())->save();

        return redirect(route('fornecedores.lista'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        //dd($fornecedor);
        $fornecedor = $fornecedor->delete();

        return redirect(route('fornecedores.lista'));
    }
}
