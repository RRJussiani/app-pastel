@extends('layouts/site')

@section('titulo-pagina', $titulo)

@section('context')
    <section id="pedidos">
        
        <h1>{{ $titulo }}</h1>
        
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-adicionar" title="Fazer pedido">
            Fazer pedido
        </a>

        <div class="clearfix"></div>

            <table class="table table-hover table-inverse">
                <thead class="thead-inverse">
                    <tr>
                        <th>Pedido</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <th width="100"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td scope="row">#{{ $pedido->id }}</td>
                            <td>{{ $pedido->cliente->nome }}</td>
                            <td>R$ {{ number_format($pedido->total, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('pedidos.show', $pedido->id) }}" title="{{ $pedido->nome }}" class="btn btn-link">
                                    Detalhes
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $pedidos->links() !!}

    </section>
@endsection
