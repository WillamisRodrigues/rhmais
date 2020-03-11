<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    protected $fillable = ['nome', 'descricao'];

    protected $table = 'motivo';
}
