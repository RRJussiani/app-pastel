<div class="row">
        
    <div class="col-6">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{ $cliente->nome ?? old('nome') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $cliente->email ?? old('email') }}">
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-8">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" value="{{ $cliente->telefone ?? old('telefone') }}">
                </div>
                <div class="col-4">
                    <label for="dataNascimento">Data de nascimento</label>
                    <input type="text" class="form-control" name="dataNascimento" value="{{ $cliente->dataNascimento ?? old('dataNascimento') }}">
                </div>
            </div>
        </div>            
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" value="{{ $cliente->endereco ?? old('endereco') }}">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $cliente->bairro ?? old('bairro') }}">
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-8">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" value="{{ $cliente->complemento ?? old('complemento') }}">
                </div>
                <div class="col-4">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" value="{{ $cliente->cep ?? old('cep') }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<button type="submit" class="btn btn-success">Salvar</button>