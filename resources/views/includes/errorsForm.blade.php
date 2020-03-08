@if ($errors->any())
    <div class="row">
        <div class="col">
            <div class="erros alert alert-warning" role="alert">
                @foreach ($errors->all() as $error)
                    <strong>{{ $error }}</strong> <br>
                @endforeach
            </div>
        </div>
    </div>
@endif