<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PedidoPastel extends Model
{
    use SoftDeletes;
    protected $table = 'pedidos_pasteis';
    protected $fillable = ['idPedido'];
}
