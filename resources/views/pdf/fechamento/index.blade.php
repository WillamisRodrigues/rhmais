<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fechamento</title>
    <link rel="stylesheet" href="{{ public_path('/css/bootstrap.min.css') }}">
    <style>
        .tab,
        tr {
            border: 2px solid #999999;
        }

        body {
            font-size: 9px;
        }
    </style>
</head>

<body>
<img src="{{ public_path('/images/logo-rhmais.png') }}" alt="" style="width:20%; margin-left:40%;">
<br>
<h4 class="text-center">Informe de Faturamentos (Resumo)</h4>
<br>
<div class="tab">
    <table class="table" style="max-width: 100%">
        <tr>
            <th><strong> Cliente</strong></th>
            <th><strong> Referência </strong></th>
            <th><strong> Nº do Contrato </strong></th>
            <th><strong> Estagiário (a) </strong></th>
            <th><strong> Inicio / Fim TCE </strong></th>
            <th><strong> Data Rescisao </strong></th>
            <th><strong> Período Faturamento  </strong></th>
            <th><strong> Valor Taxas </strong></th>
            <th><strong> Valor Fechamento </strong></th>
            <th><strong> Valor Total </strong></th>
        </tr>
        <tr>
            <td>TAGUE WEB INTELLIGENCE </td>
            <td>2020/01</td>
            <td>20200102111329</td>
            <td>VINÍCIUS KOHN SILVA</td>
            <td>06/01/20 30/06/20</td>
            <td></td>
            <td>01/01/20 31/01/20</td>
            <td> 0.00</td>
            <td> 86.67</td>
            <td>86.67</td>
        </tr>
        
    </table>   
</div> 
</body>

</html>
