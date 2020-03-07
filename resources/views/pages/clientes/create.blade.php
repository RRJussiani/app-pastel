@extends('layouts/site')

@section('titulo-pagina', 'Cadastrar Cliente')

@push('style')
    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
@endpush

@section('context')

<section id="cadastrar-cliente">
    <h1>Cadastrar Cliente</h1>
            
    @if ($errors->any())
        <div class="col">
            <div class="erros alert alert-warning" role="alert">
                @foreach ($errors->all() as $error)
                    <strong>{{ $error }}</strong> <br>
                @endforeach
            </div>
        </div>
    @endif

    <div class="clearfix"></div>

    <div class="flex-center position-ref">

        <form action="{{ route('clientes.store') }}" method="post" id="formulario">
            
            <div class="col">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-8">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" value="{{ old('telefone') }}">
                        </div>
                        <div class="col-4">
                            <label for="dataNascimento">Data de nascimento</label>
                            <input type="text" class="form-control" name="dataNascimento" value="{{ old('dataNascimento') }}">
                        </div>
                    </div>
                </div>            
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" id="endereco" value="{{ old('endereco') }}">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" value="{{ old('bairro') }}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-8">
                            <label for="complamento">Complemento</label>
                            <input type="text" class="form-control" name="complamento" id="complamento" value="{{ old('complamento') }}">
                        </div>
                        <div class="col-4">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" name="cep" id="cep" value="{{ old('cep') }}">
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>
    
@endsection
