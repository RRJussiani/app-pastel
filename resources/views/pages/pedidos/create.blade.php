@extends('layouts/site')

@section('titulo-pagina', $titulo)

@push('style')
    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
@endpush

@section('context')

<section id="fazer-pedido">
    <h1>{{ $titulo }}</h1>
  
    @include('includes.errorsForm')

    <div class="clearfix"></div>

    <div class="flex-center position-ref">

        <form action="{{ route('pedidos.store') }}" method="post" id="formulario">
            <div class="row">
                <div class="col-6">
                    @csrf
                    <div class="form-group">
                        <label for="cliente_id">Cliente</label>
                        <select class="form-control" name="cliente_id" id="cliente_id">
                            <option value="">Selecione um cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ old('cliente_id') ?? $cliente->id }}">{{ $cliente->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="observacao">Observação</label>
                        <textarea class="form-control" name="observacao" id="observacao" rows="3">{{ old('observacao') }}</textarea>
                    </div>
                </div>                

                <div class="col-12">
                    <table class="table table-hover table-inverse">
                        <thead class="thead-inverse">
                            <tr>
                                <th width="200"></th>
                                <th>Nome</th>
                                <th>Preço Unit.</th>
                                <th width="100">Quant.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasteis as $pastel)
                                <tr>
                                    <td scope="row"><img src='{{ url("storage/$pastel->foto") }}' alt="{{ $pastel->nome }}" width="100"/></td>
                                    <td>
                                        {{ $pastel->nome }}
                                        <input type="hidden" class="form-control" name="pasteis[{{ $loop->index }}][pastel_id]" id="pasteis[{{ $loop->index }}][pastel_id]" value="{{ $pastel->id }}"/>
                                    </td>
                                    <td>
                                        R$ {{ number_format($pastel->preco, 2, ',', '.') }}
                                        <input type="hidden" class="form-control" name="pasteis[{{ $loop->index }}][preco]" id="pasteis[{{ $loop->index }}][preco]" value="{{ $pastel->preco }}"/>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="pasteis[{{ $loop->index }}][quantidade]" id="pasteis[{{ $loop->index }}][quantidade]" min="0" value='{{ old("pasteis.$loop->index.quantidade") ?? 0 }}'>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            
            <div class="clearfix"></div>
            
            <button type="submit" class="btn btn-success">Fechar pedido</button>
        </form>
        
    </div>
</section>
@endsection