<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> TCE - TERMO DE COMPROMISSO DE ESTÁGIO </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ public_path('/css/bootstrap.min.css') }}">
    <style>
        h5,
        p {
            font-size: 8pt;
        }
        h4,
            p {
                font-size: 8pt;
            }
        hr {
            padding: 0px !important;
        }
    </style>
</head>

<body>
    <img src="{{ public_path('/images/logo-rhmais.png') }}" style="margin-left:270px; width:20%;">
    {{-- <h1 style="font-size:10pt;">{{ $estagiario }}</h1> --}}
    <h5 class="text-center"><strong> TCE - TERMO DE COMPROMISSO DE ESTÁGIO </strong></h5>
    <hr>
    <p>Pelo presente instrumento particular denominado TERMO DE COMPROMISSO DE ESTÁGIO com base na Lei
        Federal 11.788 de 25/09/2008, as partes abaixo nomeadas no item 1 (um) acordam o que segue </p>
    <hr>
    <div>
        @foreach ($instituicoes as $inst)
        {{-- Instituição de ensino --}}
        <h5><strong>INSTITUÍÇÃO DE ENSINO</strong></h5>
        <p> <strong> Razão Social: </strong> <span class="text-danger"> {{$inst->razao_social}} </span> <strong>
                CNPJ: <span class="text-danger"> {{$inst->cnpj}} </span> </strong> </p>
        <p><strong> Endereço: </strong><span class="text-danger"> {{$inst->rua}} </span> <span>
                <strong>Nº:</strong></span><span class="text-danger"> {{$inst->numero}} </span>
            <span> <strong> Bairro: <span class="text-danger"> {{$inst->bairro}} </strong></span> </span>
        </p>
        <p><strong> Cidade: </strong><span class="text-danger"> {{$inst->cidade}} </span><span> <strong>UF:
                    <span class="text-danger"> {{$inst->estado}} </span></strong> </span>
            <span> <strong> CEP: <span class="text-danger"> {{$inst->cep}}</span></strong></span>
        </p>
        <p> <strong> Representante: <span class="text-danger"> {{$inst->nome_rep}} </span> </strong> <span>
                <strong> Cargo: <span class="text-danger"> {{$inst->cargo_rep}} </span></strong></span>
        </p>
        <p> <strong> Orientador de estágio: </strong> <span class="text-danger">
            </span>
            <span> <strong> Telefone: </strong><span class="text-danger"> {{$inst->telefone}} </span>
            </span>
        </p>
    </div>
    @endforeach
     <div>
         @foreach ($empresas as $emp)
        <h5><strong>UNIDADE CONCEDENTE</strong></h5>
        <p> <strong> Razão Social: </strong><span class="text-danger"> {{$emp->razao_social}} </span><strong> CNPJ:
                <span class="text-danger"> {{$emp->cnpj}}</span> </strong> </p>
        <p><strong> Endereço: </strong> <span class="text-danger">{{$emp->rua}} </span> <span>
                <strong>Nº:</strong></span>
            <span class="text-danger"> </span>
            <span> <strong> Bairro: <span class="text-danger"> {{$emp->bairro}}</span></strong> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger">{{$emp->cidade}} </span><span> <strong>UF:
                    <span class="text-danger">{{$emp->estado}} </span></strong> </span>
            <span> <strong> CEP:<span class="text-danger"> {{$emp->cep}} </span> </strong></span> <span>
                <strong> Telefone: </strong><span class="text-danger"> {{$emp->telefone}} </span> </span>
        </p>
        <p> <strong> Representante: </strong> <span class="text-danger"> {{$emp->nome_rep}}
            </span><span><strong> Cargo: </strong> <span class="text-danger">{{$emp->cargo_rep}}  </span>
            </span> </span> </p>
            @endforeach
            @foreach ($supervisores as $sup)
        <p> <strong> Supervisor de estágio: </strong>  <span class="text-danger">{{$sup->nome}} </span><span>
                <strong> Cargo:</strong> <span class="text-danger">{{$sup->cargo}} </span></span>
        </p>
        <p> <strong> Formação Acadêmica: </strong> <span class="text-danger">{{$sup->formacao}} </span>
        </p>
    </div>
    @endforeach
    <hr>
    <div>
        @foreach ($estagiarios as $est)
        <h5><strong>A UNIDADE CONCEDENTE, juntamente com a INSTITUIÇÃO DE ENSINO, e o ESTUDANTE.</strong></h5>
        <p> <strong> Estudante: </strong> <span class="text-danger"> {{$est->nome}} </span> <strong></p>
        <p><strong> Endereço: </strong><span class="text-danger"> {{$est->rua}} </span> <span>
                <strong>Nº:</strong></span>
            <span class="text-danger"> {{$est->numero}} </span>
            <span> <strong> Bairro: <span class="text-danger"> {{$est->bairro}} </span> </strong> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger">{{$est->cidade}} </span> <span> <strong>UF: <span
                        class="text-danger"> {{$est->estado}} </span></strong> </span>
            <span> <strong> CEP: <span class="text-danger"> {{$est->cep}} </span> </strong></span>
        </p>
        <p><strong> Telefone: </strong><span class="text-danger"> {{$est->celular}} </span> <span> <strong>Email:
                    <span class="text-danger"> {{$est->email}} </span></strong> </span>
        </p>
        <p><strong> CPF: </strong><span class="text-danger"> {{$est->cpf}} </span> <span> <strong>RG: <span
                        class="text-danger"> {{$est->rg}} </span></strong> </span>
            <span> <strong> RA: <span class="text-danger"> </span> </strong></span>
        </p>
        <p><strong> Curso: </strong><span class="text-danger">{{$est->curso}} </span> <span> <strong>Período/Ano: <span
                        class="text-danger">{{$est->periodo}} </span></strong> </span>
        </p>
    </div>
    @endforeach
    <hr>
    <p class="text-justify">Celebram entre si, através do <strong> Agente de Integração </strong> Koster & Koster
        Consultoria em Recursos Humanos LTDA ME,
        CNPJ: 21.925.427/0001-70, o TERMO DE COMPROMISSO DE ESTÁGIO, de acordo com a Lei n° 11.788/2008, sob
        as seguintes condições: </p>

    <p class="text-justify"> <strong> CLÁUSULA 1ª</strong> - O Termo de Compromisso de Estágio não caracteriza a
        vinculação empregatícia entre o estudante e a
        Unidade Concedente. O presente Termo visa assegurar a complementação de aprendizagem através de treinamento
        prático, integração social e desenvolvimento do Estagiário, com acompanhamento efetivo pelo professor orientador
        de
        estágio da Instituição de Ensino e por supervisor da Parte Concedente. Pode ser OBRIGATORIO ou NÃO
        OBRIGATÓRIO.</p>
    <p class="text-justify"> <strong> CLÁUSULA 2ª </strong> - Este termo de Compromisso de Estágio terá vigência de
        @foreach ($tceContrato as $tce)
        <span class="text-danger">{{date('d/m/Y', strtotime($tce->data_inicio))}}</span> a <span class="text-danger"> {{date('d/m/Y', strtotime($tce->data_fim))}}</span>, podendo ser
        rescindido a qualquer momento por qualquer uma das partes sem ônus, multas ou aviso prévio através do Termo de
        Rescisão ou podendo ser prorrogado através de Termo Aditivo.</p>
    @endforeach
        @foreach ($horarios as $hor)
    <p class="text-justify"> <strong> CLÁUSULA 3ª </strong> - As atividades de estágio se farão de <span
            class="text-danger"> {{$hor->descricao}}, perfazendo 30
            horas semanais </span>. A jornada deverá ser compatível com o horário escolar do Estudante, sendo que
        durante as férias ou
        recessos escolares, outra jornada de atividades poderá ser estabelecida entre as partes.
    </p>
@endforeach
    <p class="text-justify"> <strong> CLÁUSULA 4ª </strong> - O estagiário tem direito a <strong> férias remuneradas
        </strong> de 30 (trinta) dias, após doze meses de estágio na mesma
        Empresa ou, o proporcional ao tempo de estágio, se menos de um ano.</p>

    <p class="text-justify"> <strong> CLÁUSULA 5ª </strong> - As atividades desenvolvidas deverão ser compatíveis com o
        Contexto Básico da Profissão do curso do
        estudante.
        ÚNICO - As atividades poderão ser ampliadas, reduzidas, alteradas, substituídas de acordo com a necessidade,
        sendo as
        atividades inicialmente desenvolvidas pelo estudante: </p>
        @foreach ($atividades as $ativ)
    <p class="text-justify"><span class="text-danger">{{$ativ->nome}}</span>
    </p>
    @endforeach
       @foreach ($tceContrato as $tce)
    <p class="text-justify"> <strong> CLÁUSULA 6ª </strong> - A Unidade Concedente remunerará em <span
            class="text-danger">R$ {{ $tce->bolsa }} </span>, o Estudante, a título de bolsa-
        auxílio, quantia esta que será paga a partir do mês subsequente ao vencimento,
        @endforeach
        @foreach ($beneficios as $ben)
        <span class="text-danger"> mais
            {{$ben->nome}} </span>. O valor estabelecido
            @endforeach
        poderá variar segundo a sua frequência mensal, grau de escolaridade, atividades desempenhadas, entendimento
        entre as partes
        ou outro motivo qualquer.</p>
    <p class="text-justify"><strong> CLÁUSULA 7ª </strong> - Aplica-se ao estagiário a legislação relacionado a saúde e
        segurança no trabalho, sendo sua implementação
        de responsabilidade da UNIDADE CONCEDENTE do estágio.</p>
    <p class="text-justify">
        <strong> CLÁUSULA 8ª </strong> - O ESTAGIÁRIO deverá cumprir de forma moral, ética e plena, o Programa de
        Estágio e as normas internas
        da UNIDADE CONCEDENTE, preservando o sigilo e a confidencialidade nas informações a que tiver acesso no decorrer
        do
        seu estágio junto a parte Concedente. </p>

    <p class="text-justify"> <strong> CLÁUSULA 9ª </strong> - Sempre que necessário, o estagiário deverá fornecer
        informações para o acompanhamento e supervisão do
        Programa de Estágio, dentro do prazo estipulado. </p>
    <p class="text-justify"> <strong> CLÁUSULA 10ª</strong> - Na eventual conclusão, abandono ou trancamento do curso,
        bem como o não cumprimento das normas
        estabelecidas neste Termo de Compromisso de Estágio, haverá a interrupção automática do referido Termo.</p>

    <p class="text-justify"> <strong> CLÁUSULA 11ª</strong> - Fica a Koster & Koster Consultoria em Recursos Humanos
        LTDA ME como centralizador do processo de
        estágio entre a Unidade Concedente, Instituição de Ensino e o Estudante. Quaisquer alterações que se façam
        necessárias neste
        Termo de Compromisso de Estágio, a Koster & Koster Consultoria em Recursos Humanos LTDA ME deverá ser
        comunicada. </p>

    <p class="text-justify"><strong> CLÁUSULA 12ª</strong> – Na vigência do presente Termo. O Estagiário estará incluído
        na cobertura do Seguro Contra Acidentes
        Pessoais proporcionado através da Seguradora <span class="text-danger"> SULAMÉRICA SEG. E PREVIDÊNCIA (R$16.131 MIL REAIS) </span>, numero
        de proposta/apólice <span class="text-danger"> 651805 </span>
        com capital de <span class="text-danger"> R$ 11.613,00 </span> (<span class="text-danger"> Dezesseis mil seiscentos
            e treze reais </span>), sob a responsabilidade da Koster & Koster
        Consultoria em Recursos Humanos LTDA ME. </p>
    <p class="text-justify">
        Parágrafo único - O texto completo da Lei Federal 11.788 de 25 de setembro de 2008, em anexo, faz parte
        integrante do
        presente instrumento. </p>
    <h4> DO AGENTE DE INTEGRAÇÃO: </h4>
    <p class="text-justify">
        Atuar como auxiliar no processo de aperfeiçoamento do estágio identificando as oportunidades, ajustando suas
        condições de
        realização, fazendo o acompanhamento administrativo através de verificação in-loco e/ou através de relatórios,
        efetivar o
        Seguro Contra Acidentes Pessoais e cadastrar os estudantes (§1o do art. 5o da Lei no 11.788/08), selecionando os
        locais de
        estágio e organizando o cadastro dos concedentes das oportunidades de estágio (art. 6o da Lei no 11.788/08).
    </p>
    <p class="text-justify"> Parágrafo único: Se durante a vigência deste TCE, o Agente de Integração, em sua condição
        de legitimidade, atribuições e
        responsabilidades que são do conhecimento das partes contratantes, identificar violação dos compromissos
        assumidos por
        quaisquer das partes, cessarão suas responsabilidades legais, técnicas e administrativas, devendo o mesmo
        cientificar, por
        escrito, todas as partes envolvidas.</p>
    <p class="text-justify"> E por assim estarem de acordo, assinam este Termo de Compromisso de Estágio em 4 (quatro)
        vias de igual teor.</p>
    <p>
        @php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        @endphp
        @foreach ($tceContrato as $tce)
        <p class="pull-right"> Campinas, <span class="text-danger"> {{ strftime('%A, %d de %B de %Y', strtotime($tce->data_doc))}}. </span> </p>
        @endforeach
        <div style="height:50px;"></div>
        <div class="row">
            @foreach ($instituicoes as $inst)
            <p class="pull-left">__________________________________ <br>
                    {{$inst->razao_social}}
                    @endforeach
            </p>
            <p class="pull-left" style="margin-left:40px;">
                @foreach ($empresas as $emp)
                _________________________________ <br>
                {{$emp->razao_social}}
                @endforeach
            </p>
        </div>
        <br>
        <div class="row">
            <p class="pull-right" style="margin-left:10px;">
                _______________________________________ <br>
                Koster & Koster Consultoria em RH LTDA ME
            </p>
            <p class="pull-left">
                _______________________________<br>
                @foreach ($estagiarios as $est)
                {{$est->nome}}
                @endforeach
            </p>
            <p class="pull-left" style="margin-left:65px;">
                _________________________________<br>
                @foreach ($empresas as $emp)
                 {{$emp->nome_rep}}
                 @endforeach
            </p>
        </div>
</body>

</html>
