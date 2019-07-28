<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adicional extends Model
{
    protected $fillable = ['banco','conta','codigo','senha'];
    protected $table = 'adicional';
}
