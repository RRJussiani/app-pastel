<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PedidoPastel extends Model
{
    use SoftDeletes;
    protected $table = 'pedidos_pasteis';
    protected $fillable = ['pedido_id', 'pastel_id', 'quantidade'];
    
    public function pastel () {
        return $this->hasOneThrough(PedidoPastel::class, Pastel::class, 'id', 'pastel_id');
    }
}
