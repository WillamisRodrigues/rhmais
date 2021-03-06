<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holerite - Estagiario</title>

    <link rel="stylesheet" href="{{ public_path('/css/bootstrap.min.css') }}">
    <style>
        .page-break{
            display: block; page-break-after: always;
        }
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
        @foreach ($folhas as $key => $data)
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
            <td colspan="2">Estagiário(a)<br> {{$data->nome}}  - {{$data->cpf}} </td>
            <td colspan="2">
                Data Início:  {{date('d/m/Y', strtotime($data->data_inicio))}} <br>
                Data Fim:  {{date('d/m/Y', strtotime($data->data_fim))}}
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
                {!! "1" !!}
                <br>
                      {!! "2" !!}
               <br>
                      {!! "3" !!}
                <br>
            </td>
            <td>
                {!! "Bolsa Auxílio" !!}<br>

                     {!! "Beneficio" !!}<br>


                        {!! "Beneficio" !!}<br>

            </td>
            <td>

                    R$ {{$data->valor_bolsa}}

                <br>
                {{-- Beneficios --}}
                     {{$data->valor_bolsa}}
                <br>
            </td>
            <td>
                {{-- Descontos --}}
                     {{$data->valor_bolsa}}
                <br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Total de: <br>
                    R$ {{ $data->valor_bolsa }}

                </td>
            <td>Descontos: <br>

             </td>
        </tr>
        <tr>
            <td colspan="3">Valor Base Bolsa-Auxílio <br>
                    R$ {{ $data->valor_bolsa }}

                </td>
            <td>Valor Líquido<br> <u>
                    R$ {{ $data->valor_liquido }}

        </u></td>
        </tr>
        <tr>
            <td colspan="2">Banco/Agência</td>
            <td colspan="2">Conta/Tipo</td>
        </tr>
        <tr>
            <td colspan="4">Mensagem: </td>
        </tr>

    </table>

    <div class="clearfix"></div>
    <div>
        <div style="float: left; margin-left: 3rem">
            ____/_____/_________<br>
            Data
        </div>
        <div style="float: left; margin-left: 12rem">
         <img src="{{ public_path('/images/logo-rhmais.png') }}" alt="" width="80">
        </div>
        <div style="float: right; margin-right: 3rem">
            ______________________________________<br>
            Assinatura
        </div>
    </div>
    <div class="clearfix"></div>

    <hr style="border: dotted 1px black">

    <table class="table" style="max-width: 100%">

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

                      {!! "2" !!}

               <br>

                      {!! "3" !!}

                <br>
            </td>
            <td>
              {!! "Bolsa Auxílio" !!}<br>

                     {!! "Beneficio" !!}<br>


                        {!! "Beneficio" !!}<br>

            </td>
            <td>

                    {{ $data->valor_bolsa }}

                <br>

                     {{$data->valor_bolsa}}

            <br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Total de: <br>
                    R$ {{ $data->valor_bolsa }}

                </td>
            <td>Descontos: <br>

</td>
        </tr>
        <tr>
            <td colspan="3">Valor Base Bolsa-Auxílio <br>
                    R$ {{ $data->valor_bolsa }}

                </td>
            <td>Valor Líquido<br> <u>
                    R$ {{ $data->valor_liquido }}

            </u></td>
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
        <div style="float: left; margin-left: 12rem">

        <img src="{{ public_path('images/logo-rhmais.png') }}" alt="" width="80">
        </div>
        <div style="float: right; margin-right: 3rem">
            ______________________________________<br>
            Assinatura
        </div>
    </div>

</body>

</html>
