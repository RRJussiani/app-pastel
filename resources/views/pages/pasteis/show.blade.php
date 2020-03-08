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
    
            <div class="col-6">
                <img src='{{ url("storage/$pastel->foto") }}' alt="{{ $pastel->nome }}" width="300"/>
            </div>
            <div class="col-6 info-pastel">
                <p>
                    <strong>Nome:</strong> {{ $pastel->nome }}
                </p>
                <p>
                    <strong>Preço:</strong> R$ {{ number_format($pastel->preco, 2, ',', '.') }}
                </p>
            </div>
        </div>
    </section>
@endsection
