<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    protected $fillable = ['nome', 'descricao', 'status'];

    protected $table = 'motivo';
}
