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
                        <label for="idCliente">Cliente</label>
                        <select class="form-control" name="idCliente" id="idCliente">
                            <option>Selecione um cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ old('idCliente') }}">{{ $cliente->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-6">    
                    <div class="form-group">
                        <label for="idPastel">Pastel</label>
                        <select class="form-control" name="idPastel" id="idPastel">
                            <option>Selecione o pastel</option>
                            @foreach ($pasteis as $pastel)
                                <option value="{{ old('idPastel') }}">{{ $pastel->nome }}</option>
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

            </div>
            
            <div class="clearfix"></div>
            
            <button type="submit" class="btn btn-success">Fechar pedido</button>
        </form>
        
    </div>
</section>
    
@endsection
