<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoStoreRequest;
use App\Mail\PedidoMail;
use App\Models\Cliente;
use App\Models\Pastel;
use App\Models\Pedido;
use App\Models\PedidoPastel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::paginate(9);

        return view('pages.pedidos.index', [
            'pedidos' => $pedidos,
            'titulo' => 'Pedidos'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = DB::table('clientes')->select('id', 'nome')->get();
        $pasteis = Pastel::all();

        return view('pages.pedidos.create', [
            'clientes' => $clientes,
            'pasteis' => $pasteis,
            'titulo' => 'Fazer pedido'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PedidoStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedidoStoreRequest $request)
    {
        $pedido = $request->only(['cliente_id', 'observacao']);
        $pasteis = $request->input('pasteis');
        $pasteisValidos = [];
        $pedido['total'] = 0.00;

        foreach ($pasteis as $pastel) {
            if($pastel['quantidade']){
                $pedido['total'] += $pastel['preco'] * $pastel['quantidade'];
                $pasteisValidos[] = $pastel;
            }
        }

        $idPedido = Pedido::create($pedido)->id;

        foreach ($pasteisValidos as $indice => $pastel) {
            $pastel['pedido_id'] = $idPedido;
            PedidoPastel::create($pastel);
        }

        $this->enviarEmailPedido($idPedido);

        return redirect()->route('pedidos.index');
    }

    private function enviarEmailPedido($idPedido){
        $pedido = Pedido::find($idPedido);

        foreach($pedido->pasteisPedido as $pastelPedido){
            $pastelPedido->pastel = Pastel::find($pastelPedido->pastel_id);
        }

        Mail::to('rr.jussiani@live.com')->send(new PedidoMail(config('app.name')." - Pedido #$idPedido", $pedido));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);

        foreach($pedido->pasteisPedido as $pastelPedido){
            $pastelPedido->pastel = Pastel::find($pastelPedido->pastel_id);
        }

        return view('pages.pedidos.show', [
            'pedido' => $pedido,
            'titulo' => 'Detalhes do pedido'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
