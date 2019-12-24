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
            <td colspan="2">Estagiário(a)<br> <b>{!! "nome estagiario" !!} - {!! "000.000.000-00" !!}</b> </td>
            <td colspan="2">
                Data Início: <b> {!! "00/00/0000" !!} </b> <br>
                Data Fim: <b> {!! "00/00/0000" !!} </b>
            </td>
        </tr>
        <tr>
            <td>Código</td>
            <td>Descrição</td>
            <td>Vencimentos (R$)</td>
            <td>Descontos</td>
        </tr>
        <tr>
            <td style="padding-left: 3rem">
                {!! "0" !!}<br>
                {!! "0" !!}<br>
                {!! "0" !!}<br>
            </td>
            <td>
                {!! "Bolsa Auxílio" !!}<br>
                {!! "Bolsa Auxílio" !!}<br>
                {!! "Bolsa Auxílio" !!}<br>
            </td>
            <td>
                {!! "000,00" !!}<br>
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
            <td>Total de: <br><b> {!! "000,00" !!} </b> </td>
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
            <td colspan="2">Estagiário(a)<br> {!! "nome estagiario" !!} - {!! "000.000.000-00" !!}</td>
            <td colspan="2">
                Data Início: {!! "00/00/0000" !!}<br>
                Data Fim: {!! "00/00/0000" !!}
            </td>
        </tr>
        <tr>
            <td>Código</td>
            <td>Descrição</td>
            <td>Vencimentos (R$)</td>
            <td>Descontos</td>
        </tr>
        <tr>
            <td style="padding-left: 3rem">
                {!! "0" !!}<br>
                {!! "0" !!}<br>
                {!! "0" !!}<br>
            </td>
            <td>
                {!! "Bolsa Auxílio" !!}<br>
                {!! "Bolsa Auxílio" !!}<br>
                {!! "Bolsa Auxílio" !!}<br>
            </td>
            <td>
                {!! "000,00" !!}<br>
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
            <td>Total de: <br>{!! "000,00" !!}</td>
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
