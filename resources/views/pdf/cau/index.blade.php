<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> CONVÊNIO AGENTE DE INTEGRAÇÃO e UNIDADE CONCEDENTE DE ESTÁGIO </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ public_path('/css/bootstrap.min.css') }}">
    <style>
        h5,
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
    <h5 class="text-center"><strong> CONVÊNIO AGENTE DE INTEGRAÇÃO e UNIDADE CONCEDENTE DE ESTÁGIO </strong></h5>
@foreach ($contrato as $cont)
    <p>Celebram entre si o presente Instrumento jurídico, as partes a seguir qualificadas, </p>
    <hr>
    <div class="col-md-4">
        <h5><strong>Parte Concedente :</strong></h5>
        <p> <strong> Razão Social: </strong> <span class="text-danger"> {{$cont->nome_fantasia}}</span>
            <strong> CNPJ: </strong> <span class="text-danger"> {{$cont->cnpj}} </span> </p>
        <p><strong> Endereço: </strong><span class="text-danger"> {{$cont->rua}} </span> <span>
                <strong>Nº:</strong></span><span class="text-danger"> {{$cont->numero}} </span>
            <span> <strong> Bairro: </strong> <span class="text-danger"> {{$cont->bairro}} </span> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger"> {{$cont->cidade}} </span><span> <strong>Estado:</strong> <span
                    class="text-danger">{{$cont->estado}} </span> </span>
            <span> <strong> Cep:</strong> <span class="text-danger"> {{$cont->cep}}</span> </span>
            <span> <strong> Telefone: </strong> <span class="text-danger"> {{$cont->telefone}}</span></span>
        </p>
        <p><strong> Representante Legal: </strong><span class="text-danger"> {{$cont->nome_rep}} </span> <span>
                <strong>Email:</strong></span><span class="text-danger"> {{$cont->email_rep}} </span> </p>
    </div>
    <hr>
    <div>
        <h5><strong>Agente de Integração : </strong></h5>
        <p> <strong> Razão Social: </strong><span class="text-danger"> KOSTER E KOSTER CONSULTORIA EM RH LTDA </span> </p>
        <p><strong> Endereço: </strong> <span class="text-danger">AVENIDA DOUTOR MORAES SALES </span> <span>
                <strong>Nº:</strong></span>
            <span class="text-danger"> 1172 </span>
            <span> <strong> Bairro:</strong> <span class="text-danger">CENTRO </span> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger"> Campinas </span><span> <strong>Estado: </strong>
                <span class="text-danger">SÃO PAULO </span> </span>
            <span> <strong> CEP: </strong><span class="text-danger"> 13.010-001 </span> </span> <span> <strong>
                    Telefone: </strong><span class="text-danger"> (00)0000-0000 </span> </span>
        </p>
        <p> <strong> CNPJ: </strong> <span class="text-danger"> 21.925.427/0001-70 </span><span> </p>
        <p><strong> Representante Legal: </strong><span class="text-danger"> TABAJARA DIAS DE ANDRADE </span> <span>
                <strong>Email:</strong></span><span class="text-danger"> TABAJARA@CLADE.COM.BR </span> </p>
    </div>
    <hr>
    <p>CLÁUSULA 1a - DO OBJETO</p>
    <p>
        Este convênio tem por objetivo o estabelecimento e a manutenção de um acordo de cooperaço recíproca entre a
        UNIDADE CONCEDENTE e o AGENTE
        DE INTEGRAÇÃO visando o desenvolvimento de atividades conjuntas, capazes de propiciarem a plena operacionalizaço
        em conformidade com a Lei no
        11.788 de 25/09/2008 e demais normas aplicáveis relacionadas ao ESTÁGIO DE ESTUDANTES, de cunho obrigatório ou
        não, desenvolvido no ambiente
        de trabalho, que estejam frequentando o ensino regular, em instituições de ensino superior, de educação
        profissional, de ensino médio, da educação
        especial e dos anos finais do ensino fundamental, na modalidade profissional da educação de jovens e adultos.
    </p>
    <p>
        Parágrafo único: KOSTER E KOSTER CONSULTORIA EM RH LTDA , tem o papel de auxiliar no processo de aperfeiçoamento
        do estágio identificando
        as oportunidades, ajustando suas condições de realização, fazendo o acompanhamento administrativo, através de
        verificação in loco e/ou através de
        relatórios, encaminhando negociação de seguros contra acidentes pessoais e cadastrando os estudantes (Parágrafo
        1o do art. 5o da Lei no 11.788 de
        25/09//2008), selecionando os locais de estágio e organizando o cadastro das partes cedentes e das oportunidades
        de estágio. (art. 6o da Lei no 11.788 de
        25/09/2008).
    </p>
    <p>CLÁUSULA 2o - DAS ATRIBUIÇÕES DO AGENTE DE INTEGRAÇÃO</p>
    <p>Para cumprir o estabelecimento na cláusula 1a caberá a KOSTER E KOSTER CONSULTORIA EM RH LTDA, em seu papel de
        AGENTE DE
        INTEGRAÇÃO:</p>
    <p>a) Relacionar-se com as INSTITUÇÕES DE ENSINO e com elas celebrar convênios específicos, contendo as condições
        exigidas por essas para a
        caracterização e definição dos estágios de seus alunos;</p>
    <p>b) Repassar a UNIDADE CONCEDENTE as condições mencionadas na alínea (a) e definidas pelas INSTITUIÇõES DE ENSINO;
    </p>
    <p>
        c) Obter da UNIDADE CONCEDENTE, a quantificação das oportunidades de ESTÁGIO possíveis de serem concedidas, com
        a identificação dos
        respectivos cursos;
    </p>
    <p>
        d) Encaminhar à UNIDADE CONCEDENTE, estudantes cadastrados pela KOSTER E KOSTER CONSULTORIA EM RH LTDA e
        identificados com as
        oportunidades de ESTÁGIO concedidas;
    </p>
    <p>
        e) Ajustar as condições de ESTÁGIO, definidas pelas INSTITUIÇÕES DE ENSINO com as condições e disponibilidades
        da UNIDADE CONCEDENTE;
    </p>
    <p>
        f) Providenciar para que a UNIDADE CONCEDENTE e o estudante assinem o respectivo TERMO DE COMPROMISSO DE
        ESTÁGIO, com a
        interveniência da INSTITUIÇÃO DE ENSINO;
    </p>
    <p>
        g) Preparar a documentação legal referente ao ESTÁGIO e repassar a UNIDADE CONCEDENTE os originais mediante
        termo de recebimento, bem
        como efetivar o respectivo seguro contra acidentes pessoais, em favor dos estudantes que realizarem ESTÁGIO
        junto a UNIDADE CONCEDENTE em
        decorrência deste Convênio;
    </p>
    <p>
        h) Poderá repassar ao estagiário mensalmente, a bolsa-auxílio, o auxílio transporte de acordo com o previsto no
        termo de compromisso de estágio a ser
        firmado.
    </p>
    <p>
        CLÁUSULA 3a – DAS ATRIBUIÇÕES DA UNIDADE CONCEDENTE
        <br> Para cumprir o estabelecido na Cláusula 1a caberá a UNIDADE CONCEDENTE:
    </p>
    <p>
        a) Ofertar instalações que tenham condições de proporcionar ao estagiário, atividades de aprendizagem social,
        profissional e cultural, observando o
        estabelecido na legislação relacionada a saúde e segurança no trabalho conforme artigo 14 da Lei no 11.788 de
        25/09/2008;
    </p>
    <p>
        b) Indicar empregado do quadro pessoal, com formação ou experiência profissional na área do estágio, para
        orientar e supervisionar no máximo 10 (dez)
        estagiários simultaneamente;
    </p>
    <p>
        c) Receber os estudantes encaminhados pela KOSTER E KOSTER CONSULTORIA EM RH LTDA, mantendo com os mesmos,
        entendimentos sobre as
        condições de realização do ESTÁGIO;
    </p>
    <p>
        d) Repassar a KOSTER E KOSTER CONSULTORIA EM RH LTDA, o nome dos estudantes que, efetivamente, irão realizar o
        ESTÁGIO;
    </p>
    <p>
        e) Celebrar com os estudantes, os respectivos TERMOS DE COMPROMISSO DE ESTÁGIO, com a interveniência obrigatória
        das INSTITUIÇÕES DE
        ENSINO;
    </p>
    <p>
        f) Enviar a INSTITUIÇÃO DE ENSINO, com periodicidade mínima de 6(seis) meses, relatório de atividades, com vista
        obrigatória do estagiário;
    </p>
    <p>
        g) A empresa se compromete a avisar no prazo de 3(três) dias a KOSTER E KOSTER CONSULTORIA EM RH LTDA , o
        desligamento do estagiário
        (desligado ou que pediu desligamento), para as devidas providências técnicas e administrativas;
    </p>
    <p>
        h) Informar, mensalmente, a KOSTER E KOSTER CONSULTORIA EM RH LTDA , a freqüência dos ESTAGIÁRIOS;
    </p>
    <p>
        i) Por ocasião do desligamento do ESTAGIÁRIO, entregar termo de realização de estágio, com indicação resumida
        das atividades, dos períodos e da
        avaliação de desempenho.
    </p>
    <p>
        j) Contratar, através do AGENTE DE INTEGRAÇÃO, seguro contra acidentes pessoais em favor do ESTAGIÁRIO.
    </p>
    <p>
        k) Guardar no estabelecimento o original dos documentos que comprovem a relação de ESTÁGIO após entrega desses
        pelo AGENTE DE INTEGRAÇÃO,
        responsabilizando-se pela guarda e conservação dos documentos, assumindo todas as implicações advindas do não
        cumprimento desta obrigação.
    </p>
    <p>
        CLÁUSULA 4a - DOS VALORES
    </p>
    <p>
        A UNIDADE CONCEDENTE repassara diretamente a(o) KOSTER E KOSTER CONSULTORIA EM RH LTDA, a taxa administrativa
        fixada em ( R$ 0.00)
        / ( 0.00 % ) , referente aos custos operacionais efetuados pelo AGENTE, o qual encaminhará à Unidade Concedente
        as informações relativas ao Valor e
        Forma de pagamento do mesmo com vencimento para o dia (10) do mês subseqüente.
    </p>
    <p>
        CLÁUSULA 5a - DA VIGÊNCIA
    </p>
    <p>
        O presente Convênio terá a vigência de 03/07/2019 a 31/12/2020, podendo a qualquer tempo, ser rescindido por
        qualquer uma das partes, mediante
        comunicado por escrito, com antecedência mínima de 30 (trinta) dias.
    </p>
    <p>
        Parágrafo Único – Com a rescisão do presente Convênio, como conseqüência obrigatória e necessária ocorrerá o fim
        da relação de estágio intermediada
        pelo AGENTE DE INTEGRAÇÃO, independente do tempo de estágio transcorrido, cessando para o AGENTE DE INTEGRAÇÃO
        qualquer
        responsabilidade por eventual estágio posterior a data da rescisão do Convênio, inclusive em relação a seguro
        contra acidentes pessoais.
    </p>
    <p>
        CLÁUSULA 6a - DO FORO
    </p>
    <p>
        De comum acordo, os partícipes elegem o foro da Comarca de CAMPINAS, a qualquer outro, por mais privilegiado que
        seja, para dirimir qualquer
        questão que se originar deste Convênio, e que não possa ser resolvida amigavelmente.
    </p>
    <p>
        As partes, por estarem de acordo quanto ao cumprimento dos termos mutuamente firmados, assinam o presente em
        duas vias de igual teor e conteúdo.
    </p>
        @php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        @endphp

    <p> Campinas, <span class="text-danger">{{ strftime('%A, %d de %B de %Y', strtotime($cont->data_doc))}}.</span> </p>
    <div style="height:50px;"></div>

    <p class="pull-left">__________________________________ <br>
        CLADE - CENTRO LATINO AMERICANO DE <br>
        DESENVOLVIMENTO <br><br>
        <span>(assinatura e carimbo) </span>
    </p>
    <p class="pull-left" style="margin-left:30px;">
        _________________________________ <br>
        KOSTER E KOSTER CONSULTORIA <br> EM RH LTDA <br><br>
        <span>(assinatura do(a) agente) </span>
    </p>
    <br><br>
    @endforeach
</body>

</html>
