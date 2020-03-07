@extends('layouts/site')

@section('titulo-pagina', 'Clientes')

@section('context')
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">
        Adicionar
    </a>
    
    <h1>Clientes</h1>
    
    <div class="flex-center position-ref full-height"></div>

@endsection
