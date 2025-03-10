@extends('layouts/site')

@section('titulo-pagina', $titulo)

@push('style')
    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
@endpush

@section('context')

<section id="cadastrar-cliente">
    <h1>{{ $titulo }}</h1>
  
    @include('includes.errorsForm')

    <div class="clearfix"></div>

    <div class="flex-center position-ref">

        <form action="{{ route('clientes.store') }}" method="post" id="formulario">
            @include('pages.clientes._partials.form')
        </form>
        
    </div>
</section>
    
@endsection
