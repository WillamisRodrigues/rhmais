<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model
{
        protected $fillable = [
        'nome', 'rg','cpf','telefone','celular','email','data_nascimento','ctps','serie_ctps','numero_pis','cor_raca',
        'dt_cadastro','und_concedente','agente_int','pessoa_responsavel','sexo'
    ];
    protected $table = 'estagiario';

    public function estado() {
        return $this->hasOne(Estado::class, 'nome', 'nome');
    }

    public function cidades() {
        return $this->hasOne(Cidade::class, 'estado_id', 'estado_id');
    }
}
