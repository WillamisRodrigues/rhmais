<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recesso extends Model
{
    protected $fiallable = ['estagiario_id','empresa_id', 'bolsa','data_inicio','data_fim'.'periodo','ferias',
    'vr_direito','vr_recebido','vr_saldo','tce_assinado'];
    protected $table = 'recesso';
}
