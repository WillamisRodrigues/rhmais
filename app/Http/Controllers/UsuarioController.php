<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Usuario;

class UsuarioController extends Controller
{
    public function pesquisar()
    {
        // Recebe o conteúdo elemento 'descricao' do formulário
        $usuario = Input::get('nome');

        // Busca produtos com o conteúdo da $descricao
        $usuarios = Usuario::where('nome', 'like', '%'.$usuario.'%')->get();

        // Chama a view produto.pesquisar e envia os produtos encontrados
        return view('pesquisar')->with('usuarios', $usuarios);
    }

    public function mostrar_inserir()
    {
        return view('produto.inserir');
    }

    public function inserir()
    {
        // Criando um novo objeto do tipo Produto
        $produto = new Usuario();

        // Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $produto->descricao = Input::get('descricao');
        $produto->quantidade = Input::get('quantidade');
        $produto->valor = Input::get('valor');
        $produto->data_vencimento = Input::get('data_vencimento');

        // Salvando no banco de dados
        $produto->save();

        // Criado uma mensagem para o usuário
        $mensagem = "Produto inserido com sucesso";

        // Chamando a view produto.inserir e enviando a mensagem criada
        return view('produto.inserir')->with('mensagem', $mensagem);
    }

    public function mostrar_alterar($id)
    {
        // Busca no banco o registro com o id recebido
        $produto = Usuario::find($id);

        // Envia os dados deste registro a view produto.alterar
        return view('produto.alterar')->with('produto', $produto);
    }

    public function alterar()
    {
        $id = Input::get('id');
        $p = Usuario::find($id);

        $p->descricao = Input::get('descricao');
        $p->quantidade = Input::get('quantidade');
        $p->valor = Input::get('valor');
        $p->data_vencimento = Input::get('data_vencimento');

        $p->save();

        $mensagem = "Produto alterado com sucesso!";
        $produtos = Usuario::all();
        return view('produto.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
    }

    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota
        $produto = Usuario::find($id);

        // Excluindo este objeto
        $produto->delete();

        // Criando uma mensagem para ser enviada a view produto.pesquisar
        $mensagem = "Produto excluído com sucesso!";

        // Capturando objetos para enviar a view produto.pesquisar
        $produtos = Usuario::all();

        // Retornando a view produto.pesquisar
        return view('produto.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
   }
}