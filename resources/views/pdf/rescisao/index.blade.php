<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Termo de Conclusão / Rescisão do - TCE </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ public_path('/css/bootstrap.min.css') }}">
    <style>
         h5,
        p {
            font-size: 8pt;
        }
         body {
            font-size: 1.05rem
        }
    </style>
</head>

<body>
    <img src="{{ public_path('/images/logo-rhmais.png') }}" style="margin-left:270px; width:20%;">
    <h5 class="text-center"><strong> Termo de Conclusão / Rescisão do - TCE </strong></h5>
    <hr>
    <p>Instrumento jurídico de Termo de Compromisso de Estágio e Convênio de Concessão de Estágio, previstos na Lei
        11.788 de
        25/09/2008 que regulamenta e disciplina a contratação de Estagiários.
        As partes a seguir qualificadas, </p>
    <hr>
    <div>
        @foreach ($instituicoes as $inst)
        <h5><strong>INSTITUÍÇÃO DE ENSINO</strong></h5>
        <p> <strong> Razão Social: </strong> <span class="text-danger">{{$inst->nome_instituicao}}</span>
            <strong> CNPJ: </strong> <span class="text-danger"> {{$inst->cnpj}} </span> </p>
        <p><strong> Endereço: </strong><span class="text-danger"> {{$inst->rua}} </span> <span>
                <strong>Nº:</strong></span><span class="text-danger"> {{$inst->numero}} </span>
            <span> <strong> Bairro: </strong> <span class="text-danger"> {{$inst->bairro}} </span> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger"> {{$inst->cidade}} </span><span> <strong>Estado:</strong> <span
                    class="text-danger">{{$inst->estado}}</span> </span>
            <span> <strong> Cep:</strong> <span class="text-danger"> {{$inst->cep}}</span> </span>
            <span> <strong> Telefone: </strong> <span class="text-danger"> {{$inst->telefone}}</span></span>
        </p>
    </div>
    <hr>
    @endforeach
    <div>
        @foreach ($empresas as $emp)
        <h5><strong>parte Concedente : {{$emp->nome_fantasia}} </strong></h5>
        <p> <strong> Razão Social: </strong><span class="text-danger"> {{$inst->razao_social}} </span> </p>
        <p><strong> Endereço: </strong> <span class="text-danger">{{$inst->rua}} </span> <span>
                <strong>Nº:</strong></span>
            <span class="text-danger"> {{$inst->numero}} </span>
            <span> <strong> Bairro:</strong> <span class="text-danger">{{$inst->bairro}} </span> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger"> {{$inst->cidade}} </span><span> <strong>Estado: </strong>
                <span class="text-danger">{{$inst->estado}} </span> </span>
            <span> <strong> CEP: </strong><span class="text-danger"> {{$inst->cep}} </span> </span> <span> <strong>
                    Telefone: </strong><span class="text-danger"> {{$inst->telefone}} </span> </span>
        </p>
        <p> <strong> CNPJ: </strong> <span class="text-danger"> {{$inst->cnpj}} </span><span> </p>
    </div>
    <hr>
    @endforeach
    <div>
        @foreach ($estagiarios as $est)
        <h5><strong>Estagiário(a).</strong></h5>
        <p> <strong> Nome: </strong> <span class="text-danger"> {{$est->nome}} </span> <strong></p>
        <p><strong> Endereço: </strong><span class="text-danger"> {{$est->rua}} </span> <span>
                <strong>Nº:</strong></span>
            <span class="text-danger"> {{$est->rua}} </span>
            <span> <strong> Bairro: </strong> <span class="text-danger"> {{$est->bairro}}</span> </span>
        </p>
        <p><strong> Cidade: </strong><span class="text-danger"> {{$est->cidade}} </span> <span> <strong>ESTADO: </strong> <span
                    class="text-danger"> {{$est->estado}} </span> </span>
            <span> <strong> CEP: </strong> <span class="text-danger"> {{$est->cep}} </span> </span>
        </p>
        <p><strong> Telefone: </strong><span class="text-danger"> {{$est->telefone}}</span> <span> <strong>CPF: </strong>
                <span class="text-danger"> {{$est->cpf}} </span> </span>
        </p>
        <p><strong> Email: </strong><span class="text-danger"> {{$est->email}} </span> <span>
        </p>
    </div>
    <hr>
    @endforeach
    <p class="text-justify"> Comunicado de Conclusão / Rescisão do - TCE, termos e condições a seguir: </p>
    <p class="text-justify"> 1) Período Estagiado: de:
        @foreach ($horarios as $hor)
            {{$hor->descricao}}
        @endforeach
    </p>
    <p class="text-justify">
        2) Motivo da Rescisão :
        @foreach ($motivos as $mot)
            {{$mot->nome}}
        @endforeach
    </p>
    <p class="text-justify">
        3) Atividade do Estagiário(a):
        @foreach ($atividades as $ativ)
            {{$ativ->nome}}
        @endforeach
        Supervisor(a) do estágio:
        @foreach ($supervisores as $sup)
            {{$sup->nome}} Email:  {{$sup->email}}
        @endforeach
    </p>
    <p class="pull-right"> Campinas, <span class="text-danger"> 05/12/2018. </span> </p>
    <div style="height:50px;"></div>

    <p class="pull-left">__________________________________ <br>
        LIFE ACADEMIA BRASIL EIRELI- EPP <br><br>
        <span>(assinatura e carimbo) </span>
    </p>
    <p class="pull-left" style="margin-left:30px;">
        _________________________________ <br>
        ESCOLA TECNICA ESTADUAL BENTO QUIRINO <br><br>
        <span>(assinatura e carimbo) </span>
    </p>
    <br><br>
    <p>
        _______________________________________ <br>
        (assinatura do(a) estagiário) <br>

    </p>
</body>

</html>
