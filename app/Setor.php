<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'cnpj', 'insc_estadual', 'telefone', 'celular', 'site_url'
    ];
    protected $table = 'setor';
}
