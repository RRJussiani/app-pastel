<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateClienteRequest;
use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate();

        return view('pages.clientes.index', [
            'clientes' => $clientes,
            'titulo' => 'Clientes'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.clientes.create', [
            'titulo' => 'Cadastrar Cliente'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateClienteRequest $request)
    {
        $dadosRequest = $request->except('_token');

        $dadosRequest['dataNascimento'] = Carbon::createFromFormat('m/d/Y', $dadosRequest['dataNascimento'])->format('Y-m-d');

        Cliente::create($dadosRequest);

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente){
            return redirect()->back();
        }

        $cliente['dataNascimento'] = Carbon::createFromFormat('Y-m-d', $cliente['dataNascimento'])->format('m/d/Y');

        return view('pages.clientes.edit', [
            'cliente' => $cliente,
            'titulo' => 'Editar Cliente'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateClienteRequest $request, $id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente){
            return redirect()->back();
        }

        $dadosRequest = $request->all();

        $dadosRequest['dataNascimento'] = Carbon::createFromFormat('m/d/Y', $dadosRequest['dataNascimento'])->format('Y-m-d');

        $cliente->update($dadosRequest);

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente){
            return redirect()->back();
        }

        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
