<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    protected $fiallable = ['nome','sigla','unidade_id'];
    protected $table ='beneficio';

}
