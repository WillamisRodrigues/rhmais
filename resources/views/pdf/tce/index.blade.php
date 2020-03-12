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
        .fonte-10{
            font-size: 10pt!important;
        }
    </style>
</head>

<body>
    <figure style="border: 1px solid #000;">
    <img src="{{ public_path('/images/logo-rhmais.png') }}" style="margin-left:270px; margin-top:12px; width:20%;">
    </figure>
    
    {{-- <h1 style="font-size:10pt;">{{ $estagiario }}</h1> --}}
    <h4 class="text-center"><strong> TCE - TERMO DE COMPROMISSO DE ESTÁGIO </strong></h4>
    <hr>
    <p>Pelo presente instrumento particular denominado TERMO DE COMPROMISSO DE ESTÁGIO com base na Lei
        Federal 11.788 de 25/09/2008, as partes abaixo nomeadas no item 1 (um) acordam o que segue </p>
    <hr>
    <div>
        @foreach ($instituicoes as $inst)
        {{-- Instituição de ensino --}}
        <h5><strong>INSTITUÍÇÃO DE ENSINO</strong></h5>
        <p> 
           Razão Social: 
            <span class="fonte-10">
               <strong> {{$inst->razao_social}} </strong>
            </span>
            CNPJ: 
            <span class="fonte-10"> 
               <strong> {{$inst->cnpj}} </strong> 
            </span> 
        </p>
        <p>
           Endereço: 
           <span class="fonte-10"> 
                <strong> {{$inst->rua}} </strong> 
            </span> 
            <span>
            Nº:
            </span>
            <span class="fonte-10"> 
                <strong> {{$inst->numero}} </strong> 
            </span>
            <span> 
            Bairro: 
            </span>
            <span class="fonte-10"> 
                <strong> {{$inst->bairro}} </strong>
            </span>
        </p>
        <p>
           Cidade: 
           <span class="fonte-10"> 
                <strong> {{$inst->cidade}} </strong> 
            </span>
            <span> 
            UF:
            <span class="fonte-10"> 
                <strong> {{$inst->estado}} </strong> 
            </span> 
            <span> 
                CEP: 
            </span>
            <span class="fonte-10"> 
                <strong> {{$inst->cep}} </strong>
            </span>
        </p>
        <p> 
            Representante: 
            <span class="fonte-10"> 
                <strong> {{$inst->nome_rep}} </strong> 
            </span> 
            <span>
            Cargo:
            </span> 
            <span class="fonte-10"> 
                <strong> {{$inst->cargo_rep}} </strong> 
            </span>
        </p>
        <p> 
            Orientador de Estágio: 
            <span class="fonte-10"></span>
            <span> 
            Telefone: 
            <span class="fonte-10"> 
                <strong> {{$inst->telefone}} </strong> 
            </span>
        </p>
    </div>
    @endforeach
    <hr>
     <div>
         @foreach ($empresas as $emp)
        <h5><strong>UNIDADE CONCEDENTE</strong></h5>
        <p> 
            Razão Social: 
            <span class="fonte-10"> 
                <strong> {{$emp->razao_social}} </strong> 
            </span>
            CNPJ:
            <span class="fonte-10"> 
                <strong> {{$emp->cnpj}} </strong>
            </span> 
        </p>
        <p>
            Endereço: 
            <span class="fonte-10">
                <stromg> {{$emp->rua}} </strong> 
            </span> 
            <span>
            Nº:
            </span>
            <span class="fonte-10"> </span>
            <span> 
            Bairro:
            </span> 
            <span class="fonte-10"> 
              <strong> {{$emp->bairro}} </strong>
            </span>  
        </p>
        <p>
            Cidade: 
            <span class="fonte-10">
                <strong> {{$emp->cidade}} </strong> 
            </span>
            <span>
            UF:
            </span>
            <span class="fonte-10">
                <strong> {{$emp->estado}} </strong> 
            </span> 
            <span> 
            CEP:
            <span class="fonte-10"> 
                <strong> {{$emp->cep}} </strong> 
            </span> 
            <span>
                Telefone:
            </span>
            <span class="fonte-10"> 
                <strong> {{$emp->telefone}} </strong> 
            </span> 
        </p>
        <p> 
            Representante:
            <span class="fonte-10"> 
                <strong> {{$emp->nome_rep}} </strong>
            </span>
            <span>
            Cargo: 
            </span>
           <span class="fonte-10">
                <strong> {{$emp->cargo_rep}} </strong>  
            </span> 
        </p>
            @endforeach
            @foreach ($supervisores as $sup)
        <p> 
            Supervisor de estágio: 
            <span class="fonte-10">
                <strong> {{$sup->nome}} </strong> 
            </span>
            <span>
                Cargo:
            <span class="fonte-10">
                <strong> {{$sup->cargo}} </strong> 
            </span>
        </p>
        <p> 
            Formação Acadêmica: 
            <span class="fonte-10">
                <strong> {{$sup->formacao}} </strong> 
            </span>
        </p>
    </div>
    @endforeach
    <hr>
    <div>
        @foreach ($estagiarios as $est)
        <h5><strong>A UNIDADE CONCEDENTE, juntamente com a INSTITUIÇÃO DE ENSINO, e o ESTUDANTE.</strong></h5>
        <p> 
          Estudante: 
           <span class="fonte-10"> 
            <strong> {{$est->nome}} </strong> 
           </span> 
        </p>
        <p>
            Endereço: 
            <span class="fonte-10"> 
                <strong> {{$est->rua}} </strong>  
            </span> 
            <span>
            Nº:
            </span>
            <span class="fonte-10"> 
                <strong> {{$est->numero}} </strong> 
            </span>
            <span> 
              Bairro: 
            </span>
            <span class="fonte-10"> 
                <strong> {{$est->bairro}} </strong> 
            </span> 
        </p>
        <p>
            Cidade: 
            <span class="fonte-10">
                <strong> {{$est->cidade}} </strong> 
            </span> 
            <span> 
            UF: 
            </span>
            <span class="fonte-10"> 
              <strong> {{$est->estado}} </strong> 
            </span>
            <span> 
            CEP: 
            </span>
            <span class="fonte-10"> 
                <strong> {{$est->cep}} </strong> 
            </span> 
        </p>
        <p>
            Telefone: 
            <span class="fonte-10"> 
                <strong> {{$est->celular}} </strong> 
            </span> 
            <span> 
            Email:
            <span class="fonte-10"> 
                <strong> {{$est->email}} </strong> 
            </span>
        </p>
        <p>
            CPF: 
            <span class="fonte-10"> 
                <strong> {{$est->cpf}} </strong> 
            </span> 
            <span> 
            RG: 
            </span>
            <span class="fonte-10"> 
                <strong> {{$est->rg}} </strong> 
            </span>
            <span> 
            RA: 
            <span class="fonte-10"> </span>
        </p>
        <p>
           Curso: 
           <span class="fonte-10">
               <strong> {{$est->curso}} </strong> 
            </span> 
            <span> 
            Período/Ano: 
            </span>
            <span class="fonte-10">
                <strong> {{$est->periodo}} </srong> 
            </span>
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
        <strong>{{date('d/m/Y', strtotime($tce->data_inicio))}}</strong> a <span class="text-danger"> {{date('d/m/Y', strtotime($tce->data_fim))}}</span>, podendo ser
        rescindido a qualquer momento por qualquer uma das partes sem ônus, multas ou aviso prévio através do Termo de
        Rescisão ou podendo ser prorrogado através de Termo Aditivo.</p>
    @endforeach
        @foreach ($horarios as $hor)
    <p class="text-justify"> <strong> CLÁUSULA 3ª </strong> - As atividades de estágio se farão de <strong> {{$hor->descricao}}, perfazendo 30
            horas semanais </strrong>. A jornada deverá ser compatível com o horário escolar do Estudante, sendo que
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
    <p class="text-justify"><strong>{{$ativ->nome}}</strong>
    </p>
    @endforeach
       @foreach ($tceContrato as $tce)
    <p class="text-justify"> <strong> CLÁUSULA 6ª </strong> - A Unidade Concedente remunerará em <strong
           >R$ {{ $tce->bolsa }} </strong>, o Estudante, a título de bolsa-
        auxílio, quantia esta que será paga a partir do mês subsequente ao vencimento,
        @endforeach
        @foreach ($beneficios as $ben)
        <strong> mais
            {{$ben->nome}} </strong>. O valor estabelecido
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
        Pessoais proporcionado através da Seguradora <strong> SULAMÉRICA SEG. E PREVIDÊNCIA (R$16.131 MIL REAIS) </strong>, numero
        de proposta/apólice <strong> 651805 </strong>
        com capital de <strong> R$ 11.613,00 </strong> (<strong> Dezesseis mil seiscentos
            e treze reais </strong>), sob a responsabilidade da Koster & Koster
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
        <p class="pull-right"> Campinas, <strong> {{ strftime('%A, %d de %B de %Y', strtotime($tce->data_doc))}}. </strong> </p>
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
