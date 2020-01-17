<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de Valores - Bolsa Auxilio</title>
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
<img src="{{ public_path('/images/logo-rhmais.png') }}" alt="" style="width:20%; margin-left:40%;">
<br>
<h4 class="text-center">Relatório de Valores - Bolsa Auxilio</h4>
<br>
<div class="tab">
    <table class="table" style="max-width: 100%">
        @foreach ($folha as $data)
        <tr>
            <td><strong> Matricula:</strong> 201901111333</td>
            <td><strong> Estagiário: </strong> {{$data->nome}} </td>
            <td><strong> CPF: </strong> {{$data->cpf}}</td>
        </tr>
        <tr>
            <td><strong> Unidade:</strong> {{$data->nome_fantasia}}</td>
            <td><strong> Rua: </strong> Professora Ruth </td>
            <td><strong> Nº: </strong>  181</td>
            <td><strong> Complemento: </strong>  ---</td>
        </tr>
        <tr>
            <td><strong> Cidade:</strong> Campinas</td>
            <td><strong> Bairro: </strong> jardim do lago </td>
            <td><strong> Telefone: </strong>  --</td>
        </tr>
        <tr>
            <td><strong> Valor Crédito:</strong> {{$data->valor_liquido}}</td>
            <td><strong> Valor Débito: </strong> 0.00 </td>
            <td><strong> Valor Liquido: </strong> {{$data->valor_liquido}} </td>
            <td><strong> Referência: </strong>{{$data->referencia}} </td>
        </tr>
        <tr>
            <td><strong> Banco/A:</strong> </td>
            <td><strong> CC/Tipo: </strong>  </td>
            <td><strong> Dt Início TCE: </strong> {{$data->data_inicio}} </td>
            <td><strong> Dt Fim TCE: </strong> {{$data->data_inicio}} </td>
        </tr>
        <tr>
            <td><strong> Valor Pcte: 0.00</strong> </td>
            <td><strong> Percentual %: </strong>  </td>
            <td><strong> Valor: </strong> 0.00 </td>
        </tr>
        <tr>
            <td><strong> Custo Unitário: 80.00</strong> </td>
            <td><strong> Valor Adicional: </strong>  </td>
        </tr>
        @endforeach
    </table>
</div>
</body>

</html>
