@extends('layouts/site')

@section('titulo-pagina', $titulo)

@section('context')
    <section id="clientes">
        
        <h1>{{ $titulo }}</h1>
        
        <a href="{{ route('clientes.create') }}" class="btn btn-info btn-adicionar" title="Cadastrar">
            Cadastrar
        </a>

        <div class="clearfix"></div>


            <table class="table table-hover table-inverse">
                <thead class="thead-inverse">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td scope="row">{{ $cliente->nome }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>
                                <a href="{{ route('clientes.edit', $cliente->id) }}" title="{{ $cliente->nome }}" class="btn btn-link">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $clientes->links() !!}

    </section>
@endsection
