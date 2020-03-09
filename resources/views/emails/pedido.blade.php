@component('mail::message')
# Pedido {{ $pedido->id }}

- <b>Cliente:</b> {{ $pedido->cliente->nome }}
- <b>Email:</b> {{ $pedido->cliente->email }}
@if ($pedido->cliente->telefone)
- <b>Telefone:</b> {{ $pedido->cliente->telefone }}
@endif
- <b>Total: </b> R$ {{ number_format($pedido->total, 2, ',', '.') }}

<br/><br/>

@component('mail::table')
| Nome       | Quantidade    | Preço  |
| ---------- |:-------------:| ------:|
@foreach ($pedido->pasteisPedido as $pastelPedido)
| {{ $pastelPedido->pastel->nome }}     | {{ $pastelPedido->quantidade }}      | R$ {{ number_format($pastelPedido->pastel->preco, 2, ',', '.') }}     |
@endforeach
@endcomponent

<br/><br/>

@if ($pedido->observacao)
Observação: <br/>
{{ $pedido->observacao }}
@endif


@endcomponent
