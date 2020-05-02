<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> PLANO DE ESTÁGIO (previsto na Lei de Estágio 11.788/08) </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ public_path('/css/bootstrap.min.css') }}">
    <style>
        h5,
        p {
            font-size: 8pt;
        }
        .borda{
            border-top:1px solid #000;
        }
        .titulo{
            text-decoration: underline;
        }
        table{
            padding:0px!important;
        }
        table td{
            padding:0px!important;
            border:none!important;
        }
        h4,
            p {
                font-size: 8pt;
            }
        hr {
            padding: 0px !important;
        }
        .fonte-10{
            font-size: 10pt!important;
        }
        .fonte-8{
            font-size: 8pt!important;
        }
    </style>
</head>

<body>
    <figure style="border: 1px solid #000;">
        <img src="{{ public_path('/images/logo-rhmais.png') }}" style="margin-left:270px; margin-top:12px;  width:20%;">
    </figure>
    <h5 class="text-center mt-2"><strong> PLANO DE ESTÁGIO (previsto na Lei de Estágio 11.788/08) </strong></h5>

<div class="borda"></div>
    <p class="mt-2">
    @foreach ($estagiarios as $est)
        Nome:
        <span class="fonte-10">
            <strong> {{$est->nome}} </strong>
        </span>
        CPF:
        <span class="fonte-10">
            <strong> {{$est->cpf}} </strong>
        </span>
        Matrículado(a) no :
        <span class="fonte-10">
            <strong> {{$est->periodo}} </strong>
        </span>
    </p>
    <p>
        do nível:
        <span class="fonte-10">
           <strong> {{$est->nivel}} </strong>
        </span>
        do curso de :
        <span class="fonte-10">
           <strong> {{$est->curso}} </strong>
        </span>
        Matrícula no :
        <span class="fonte-10">
            <strong>{{$est->matricula}}</strong>
        </span>
    </p>
    @endforeach
    <p>
        Setor :
        <span class="fonte-10">
            <strong> ADMINISTRATIVO </strong>
        </span>
    </p>
    @foreach ($supervisores as $sup)

    <p>
        Supervisor(a) do estágio:
        <span class="fonte-10">
        <strong> {{$sup->nome}} - {{$sup->cargo}} - {{$sup->email}} - {{$sup->telefone}}
        </strong>
    </p>
    @endforeach
    <div class="borda"></div>
    <div>
        @foreach ($empresas as $emp)
        <p>
        parte Concedente :
        <span class="fonte-10">
            <strong>{{$emp->razao_social}} </strong>
        </span>
        CNPJ:
        <span class="fonte-10">
            <strong> {{$emp->cnpj}} </strong>
        </p>
        @endforeach
    </div>
    <div class="borda"></div>
    <div>
        @foreach ($instituicoes as $inst)
        <p>
        Instituição de Ensino:
        <span class="fonte-10">
            <strong> {{$inst->nome_instituicao }} </strong>
        </span>
        CNPJ:
        <span class="fonte-10">
            <strong> {{$inst->cnpj }} </strong>
        </span>
    </p>
    @endforeach
    </div>
    <div class="borda"></div>
    <div>
        @foreach ($tceContrato as $tce)
        <p>
            Vigência do Estágio:
            <span class="fonte-10">
                <strong> {{date('d/m/Y', strtotime($tce->data_inicio))}} a {{date('d/m/Y', strtotime($tce->data_fim))}} </strong>
            </span>
        </p>
            @endforeach
    </div>
    <div class="borda"></div>
    <div>
        @foreach ($plano as $plan)
    <p> <strong> Plano de Atividades : {{$plan->atividade}}</strong> </p>
    </div>
    <div class="borda"></div>
    <div>
        <p> <strong> Observação :  {{$plan->obs}}</strong> </p>
    </div>
    @endforeach
    <div class="borda"></div>
    <div style="height:50px;"></div>
    <div class="row">
            @foreach ($estagiarios as $est)
            <p class="pull-right" style="margin-left:10px;">
                ____________________________________________________________

                 <br>
               {{$est->nome}} <br>
        <span>(assinatura do(a) estagiário) </span>
            </p>
            @endforeach
            <p class="pull-left">
                _________________________________________________________<br>
                Koster & Koster Consultoria em RH LTDA ME
            </p>
        </div>
        <div style="height:80px;"></div>
        <div class="row">
            @foreach ($supervisores as $sup)

        <p class="pull-right" style="margin-left:10px;">
        _________________________________________________________<br>
        {{$sup->nome}} <br>
        <span> (assinatura e carimbo)-Supervisor </span>
            </p>
            @endforeach
            @foreach ($empresas as $emp)
            <p class="pull-left">
            _________________________________________________________<br>
       {{$emp->razao_social}} <br>
        <span>(assinatura e carimbo) </span>
            </p>
            @endforeach
        </div>
        <div style="height:80px;"></div>
        <div class="row">
            @foreach ($instituicoes as $inst)
        <p style="margin-left:10px;">
        _________________________________________________________<br>
        {{$inst->nome_instituicao}}<br><br>
        <span> (assinatura e carimbo) </span>
        </div>
@endforeach
</body>

</html>
