<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $dados = [
            'nome' => "Willamis Correia",
            'und_concedente' => "Empresa RH",
            'celular' => "88 88888888",
            'cpf' => "000.000.000.10",
            'data_nascimento' => "2019-08-19",
        ];

        if (Usuario::where('cpf', '=',$dados['cpf'])->count()){
         $usuario = User::where('cpf', '= ', $dados['cpf'])->firstOrFail();
         $usuario->update($dados);
         echo "Usuario cadastrado!";
        }else{
            Usuario::create($dados);
            echo "Usuario cadastrado!";
        }
    }
}
