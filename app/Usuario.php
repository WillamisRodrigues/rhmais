<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $fillable = [
         'nome', 'rg','cpf','telefone','celular','email','data_nascimento','ctps','serie_ctps','numero_pis','cor_raca',
        'dt_cadastro','und_concedente','agente_int','pessoa_responsavel','sexo'
    ];
    protected $table = 'usuario';

}
