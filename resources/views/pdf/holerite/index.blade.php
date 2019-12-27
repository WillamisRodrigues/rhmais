<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holerite - Estagiario</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        table,
        tr {
            border: 2px solid #999999;
        }

        body {
            font-size: 1.05rem
        }
    </style>
</head>

<body>
    <table class="table" style="max-width: 100%">
        @foreach ($folha as $data)
        <tr>
            <td colspan="2">Recibo de Pagamento Bolsa-Auxílio</td>
            <td>Referência</td>
            <td>{{$data->referencia}}</td>
        </tr>
        <tr>
            <td colspan="3">Agente de Integração: <br>KOSTER E KOSTER CONSULTORIA EM RH LTDA</td>
            <td>21.925.427/0001-70</td>
        </tr>
        <tr>
            <td colspan="3">Unidade Concedente: <br>{{$data->nome_fantasia}}</td>
            <td>{{$data->cnpj}}</td>
        </tr>
        <tr>
            <td colspan="2">Estagiário(a)<br> <b>{{$data->nome}}  - {{$data->cpf}}</b> </td>
            <td colspan="2">
                Data Início: <b> {{date('d/m/Y', strtotime($data->data_inicio))}} </b> <br>
                Data Fim: <b> {{date('d/m/Y', strtotime($data->data_fim))}} </b>
            </td>
        </tr>
        <tr>
            <td>Código</td>
            <td>Descrição</td>
            <td>Vencimentos</td>
            <td>Descontos</td>
        </tr>
        <tr>
            <td style="padding-left: 3rem">
                {!! "1" !!}<br>
                {!! "2" !!}<br>
                {!! "3" !!}<br>
            </td>
            <td>
                {!! "Bolsa Auxílio" !!}<br>
                {!! "Bolsa Auxílio" !!}<br>
                {!! "Bolsa Auxílio" !!}<br>
            </td>
            <td>
                R$ {{$data->valor_bolsa}}<br>
                {!! "000,00" !!}<br>
                {!! "" !!}<br>
            </td>
            <td>
                {!! "" !!}<br>
                {!! "" !!}<br>
                {!! "000,00" !!}<br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Total de: <br><b>R$ {{$data->valor_bolsa}} </b> </td>
            <td>Descontos: <br><b> {!! "000,00" !!} </b> </td>
        </tr>
        <tr>
            <td colspan="3">Valor Base Bolsa-Auxílio <br> <b>R$ {{$data->valor_bolsa}}</b></td>
            <td>Valor Líquido<br> <u><b>R$ {{$data->valor_liquido}}</b></u></td>
        </tr>
        <tr>
            <td colspan="2">Banco/Agência</td>
            <td colspan="2">Conta/Tipo</td>
        </tr>
        <tr>
            <td colspan="4">Mensagem: </td>
        </tr>
        @endforeach
    </table>

    <div class="clearfix"></div>
    <div>
        <div style="float: left; margin-left: 3rem">
            ____/_____/_________<br>
            Data
        </div>
        <div style="float: right; margin-right: 3rem">
            ______________________________________<br>
            Assinatura
        </div>
    </div>
    <div class="clearfix"></div>

    <hr style="border: dotted 1px black">

    <table class="table" style="max-width: 100%">
        @foreach ($folha as $data)
        <tr>
            <td colspan="2">Recibo de Pagamento Bolsa-Auxílio</td>
            <td>Referência</td>
            <td>{{$data->referencia}}</td>
        </tr>
        <tr>
            <td colspan="3">Agente de Integração: <br>KOSTER E KOSTER CONSULTORIA EM RH LTDA</td>
            <td>21.925.427/0001-70</td>
        </tr>
         <tr>
            <td colspan="3">Unidade Concedente: <br>{{$data->nome_fantasia}}</td>
            <td>{{$data->cnpj}}</td>
        </tr>
        <tr>
            <td colspan="2">Estagiário(a)<br>{{$data->nome}}  - {{$data->cpf}}</td>
            <td colspan="2">
                Data Início: {{$data->data_inicio}}<br>
                Data Fim: {{$data->data_fim}}
            </td>
        </tr>
        <tr>
            <td>Código</td>
            <td>Descrição</td>
            <td>Vencimentos</td>
            <td>Descontos</td>
        </tr>
        <tr>
            <td style="padding-left: 3rem">
                {!! "1" !!}<br>
                {!! "2" !!}<br>
                {!! "3" !!}<br>
            </td>
            <td>
                {!! "Bolsa Auxílio" !!}<br>
                {!! "Bolsa Auxílio" !!}<br>
                {!! "Bolsa Auxílio" !!}<br>
            </td>
            <td>
                R$ {{$data->valor_bolsa}}<br>
                {!! "000,00" !!}<br>
                {!! "" !!}<br>
            </td>
            <td>
                {!! "" !!}<br>
                {!! "" !!}<br>
                {!! "000,00" !!}<br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Total de: <br>R$ {{$data->valor_bolsa}}</td>
            <td>Descontos: <br>{!! "000,00" !!}</td>
        </tr>
        <tr>
            <td colspan="3">Valor Base Bolsa-Auxílio <br>R$ {{$data->valor_bolsa}}</td>
            <td>Valor Líquido<br> <u><b>R$ {{$data->valor_liquido}}</b></u></td>
        </tr>
        <tr>
            <td colspan="2">Banco/Agência</td>
            <td colspan="2">Conta/Tipo</td>
        </tr>
        <tr>
            <td colspan="4">Mensagem: </td>
        </tr>
        @endforeach
    </table>

    <div class="clearfix"></div>
    <div>
        <div style="float: left; margin-left: 3rem">
            ____/_____/_________<br>
            Data
        </div>
        <div style="float: right; margin-right: 3rem">
            ______________________________________<br>
            Assinatura
        </div>
    </div>
    <div class="clearfix"></div>

</body>

</html>
