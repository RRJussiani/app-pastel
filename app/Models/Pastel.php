<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    protected $table = 'pasteis';
    protected $fillable = ['nome', 'preco', 'foto'];
}
