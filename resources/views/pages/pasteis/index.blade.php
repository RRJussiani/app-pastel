@extends('layouts/site')

@section('titulo-pagina', $titulo)

@section('context')
    <section id="pasteis">
        
        <h1>{{ $titulo }}</h1>

        <div class="clearfix"></div>

        <table class="table table-hover table-inverse">
            <thead class="thead-inverse">
                <tr>
                    <th width="200"></th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th width="100"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasteis as $pastel)
                    <tr>
                        <td scope="row"><img src='{{ url("storage/$pastel->foto") }}' alt="{{ $pastel->nome }}" width="100"/></td>
                        <td>{{ $pastel->nome }}</td>
                        <td>R$ {{ number_format($pastel->preco, 2, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('pasteis.show', $pastel->id) }}" title="{{ $pastel->nome }}" class="btn btn-link">
                                Detalhes
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $pasteis->links() !!}

    </section>
@endsection
