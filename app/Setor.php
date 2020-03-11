<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'nome', 'sigla',
    ];
    protected $table = 'setor';
}
