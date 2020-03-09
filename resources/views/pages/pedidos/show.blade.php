@extends('layouts/site')

@section('titulo-pagina', $titulo)

@push('style')
    <link href="{{ asset('css/detalhes-pastel.css') }}" rel="stylesheet">
@endpush


@section('context')
    <section id="detalhes-pastel">
        <h1>{{ $titulo }}</h1>
        
        <div class="clearfix"></div>

        <div class="row">
    
            <div class="col-6 info-pastel">
                <p>
                    <strong>Pedido:</strong> #{{ $pedido->id }}
                </p>
                <p>
                    <strong>Total:</strong> R$ {{ number_format($pedido->total, 2, ',', '.') }}
                </p>
                <p>
                    <strong>Observação:</strong> {{ $pedido->observacao }}
                </p>
            </div>

            <div class="col-6 info-pastel">
                <p>
                    <strong>Cliente:</strong> {{ $pedido->cliente->nome }}
                </p>
                <p>
                    <strong>Email:</strong> {{ $pedido->cliente->email }}
                </p>
                <p>
                    <strong>Telefone:</strong> {{ $pedido->cliente->telefone }}
                </p>
            </div>

            <div class="col-12">
                <table class="table table-hover table-inverse">
                    <thead class="thead-inverse">
                        <tr>
                            <th width="100"></th>
                            <th>Nome</th>
                            <th>Preço Unit.</th>
                            <th width="100">Quant.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedido->pasteisPedido as $pastelPedido)
                            <tr>
                                <td><img src='{{ url("storage/{$pastelPedido->pastel->foto}") }}' alt="{{ $pastelPedido->pastel->nome }}" width="100"/></td>
                                <td>
                                    {{ $pastelPedido->pastel->nome }}
                                </td>
                                <td>
                                    R$ {{ number_format($pastelPedido->pastel->preco, 2, ',', '.') }}
                                </td>
                                <td>
                                    {{ $pastelPedido->quantidade }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
