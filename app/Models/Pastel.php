<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pastel extends Model
{
    use SoftDeletes;
    protected $table = 'pasteis';
    protected $fillable = ['nome', 'preco', 'foto'];
}
