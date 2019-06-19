<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [

            'name' => "rhmais",
            'email' => "rhmais@mail.com",
            'password' => bcrypt("123456"),
        ];

        if (User::where('email', '=',$dados['email'])->count()){
         $usuario = User::where('email', '= ', $dados['email'])->firstOrFail();
         $usuario->update($dados);
         echo "Usuario cadastrado!";
        }else{
            User::create($dados);
            echo "Usuario cadastrado!";
        }
    }
}