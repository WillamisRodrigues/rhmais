<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisar produtos</title>
    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-2">Pesquisa de produtos</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{ $mensagem }}</div>
    @endif
    <form action="/produtos/pesquisar" method="post" class="form-inline mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="descricao">Descrição: </label>
            <input type="text" id="descricao" name="descricao" class="form-control ml-2">
        </div>
        <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
    </form>
    @if(count($produtos) == 0)
        <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
    @else
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th class="text-left">Descrição</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Data de vencimento</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($produtos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td class="text-left">{{ $p->descricao }}</td>
                    <td>{{ $p->quantidade }}</td>
                    <td>{{ $p->valor }}</td>
                    <td>{{ $p->data_vencimento }}</td>
                    <td><a href="/produtos/excluir/{{ $p->id }}"><button class="btn btn-danger">Excluir</button></a></td>
                    <td><a href="/produtos/alterar/{{ $p->id }}"><button class="btn btn-warning">Alterar</button></a></td>
                </tr>
            @endforeach
        </table>
    @endif
</div>
</body>
</html>