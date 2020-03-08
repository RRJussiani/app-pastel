<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use SoftDeletes;
    protected $fillable = ['idCliente', 'total', 'observacao'];

    public function pasteis() {
        return $this->morphMany('Models\PedidoPastel', 'pasteis');
    }

    public function cliente() {
        return $this->morphOne('Models\Cliente', 'cliente');
    }
}
