<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
    protected $fillable = ['nome'];
    protected $table = 'orientador';
}
