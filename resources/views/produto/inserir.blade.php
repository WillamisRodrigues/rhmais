<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir produto</title>
    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-2">Inserir produto</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success">Produto inserido com sucesso!</div>
    @endif
    <form action="/produtos/inserir" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="descricao">Descrição: <span class="text-danger">*</span></label>
            <input type="text" id="descricao" name="descricao" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade: <span class="text-danger">*</span></label>
            <input type="number" id="quantidade" name="quantidade" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor: <span class="text-danger">*</span></label>
            <input type="number" id="valor" name="valor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="data_vencimento">Data de vencimento: </label>
            <input type="date" id="data_vencimento" name="data_vencimento" class="form-control">
        </div>
        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Inserir">
    </form>
</div>

</body>
</html>