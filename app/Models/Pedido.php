<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use SoftDeletes;
    protected $fillable = ['cliente_id', 'total', 'observacao'];

    public function pasteisPedido() {
        return $this->hasMany(PedidoPastel::class);
    }

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}
