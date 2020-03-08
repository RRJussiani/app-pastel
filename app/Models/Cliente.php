<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome', 'email', 'telefone', 'dataNascimento', 'endereco', 'complemento', 'bairro', 'cep'];
}
