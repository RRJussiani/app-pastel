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
        

    <div>
        <form action="{{ route('clientes.update', $cliente->id) }}" method="post" id="formulario">
            @method('PUT')
            @include('pages.clientes._partials.form')
        </form>

        @isset($cliente)
            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-excluir">
                    Excluir
                </button>
            </form>
        @endisset
    </div>

</section>
    
@endsection
