<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'dataNascimento', 'endereco', 'complemento', 'bairro', 'cep'];
}
