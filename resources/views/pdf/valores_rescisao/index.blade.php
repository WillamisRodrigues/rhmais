<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório Rescisao</title>
    <link rel="stylesheet" href="{{ public_path('/css/bootstrap.min.css') }}">
    <style>
        .tab,
        tr {
            border: 2px solid #999999;
        }

        body {
            font-size: 1.05rem
        }
    </style>
</head>

<body>
<img src="{{ public_path('/images/logo-rhmais.png') }}" style="margin-left:270px; width:20%;">
   <br>
   <h4 class="text-center">Relatório de Valores - Rescisão</h4>
<br>
<div class="tab">
    @foreach ($folhaRescisao as $res)
    <table class="table" style="max-width: 100%">
        <tr>
            <td><strong> Matricula:</strong> {{$res->id}}</td>
            <td><strong> Estagiário: </strong>  {{$res->nome}} </td>
            <td><strong> CPF: </strong>  {{$res->cpf}}</td>
        </tr>
        <tr>
            <td><strong> Unidade:</strong>  {{$res->nome_fantasia}}</td>
            <td><strong> Rua: </strong> {{$res->rua}} </td>
            <td><strong> Nº: </strong>   {{$res->numero}}1</td>
            <td><strong> Complemento: </strong>   {{$res->complemento}}</td>
        </tr>
        <tr>
            <td><strong> Cidade:</strong>  {{$res->cidade}}</td>
            <td><strong> Bairro: </strong>  {{$res->bairro}} </td>
            <td><strong> Telefone: </strong>   {{$res->telefone}}</td>
        </tr>
        <tr>
            <td><strong> Valor:</strong>  {{$res->valor_bolsa}}</td>
            <td><strong> Valor Débito: </strong> 0.00 </td>
            <td><strong> Valor Liquido: </strong>  {{$res->valor_liquido}} </td>
            <td><strong> Referência: </strong> {{$res->referencia}} </td>
        </tr>
        <tr>
            <td><strong> Banco/A:</strong> </td>
            <td><strong> CC/Tipo: </strong>  </td>
            <td><strong> Data Início TCE: </strong>  {{date('d/m/Y', strtotime($res->data_inicio))}} </td>
            <td><strong> Data Rescisão: </strong>  {{date('d/m/Y', strtotime($res->data_fim))}} </td>
        </tr>
        <tr>
            <td><strong> Valor Taxa:</strong> </td>
            <td><strong> Valor %: </strong>  </td>
            <td><strong> Valor: </strong> 0.00 </td>
        </tr>
    </table>
</div>
@endforeach
</body>

</html>
