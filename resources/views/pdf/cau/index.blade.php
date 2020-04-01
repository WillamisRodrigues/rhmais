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
        <img src="{{ public_path('/images/logo-rhmais.png') }}" style="margin-left:270px; margin-top:12px; width:20%;">
    </figure>
    <h5 class="text-center"><strong> CONVÊNIO AGENTE DE INTEGRAÇÃO e UNIDADE CONCEDENTE DE ESTÁGIO </strong></h5>
@foreach ($contrato as $cont)
    <p>Celebram entre si o presente Instrumento jurídico, as partes a seguir qualificadas, </p>
    <div class="borda"></div>
    <div class="col-md-4">
        <h5 class="titulo fonte-8"><strong>Parte Concedente</strong></h5>
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="2">
                        <span class="fonte-8"> Razão Social: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->nome_fantasia}} </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> CNPJ: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->cnpj}} </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> Endereço </span>
                        <span class="fonte-10">
                        <strong> {{$cont->rua}} </strong> 
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Nº: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->numero}} </strong> 
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Bairro: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->bairro}} </strong> 
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> Cidade: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->cidade}} </strong> 
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Estado: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->estado}} </strong> 
                        </span>
                    </td>
                </tr>
                <tr>
                <td>
                        <span class="fonte-8"> CEP: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->cep}} </strong> 
                        </span>
                    </td>
                    <td colspan="2">
                        <span class="fonte-8"> Telefone: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->telefone}} </strong> 
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <span class="fonte-8"> Representante Legal: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->nome_rep}} </strong> 
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Email: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->email_rep}} </strong> 
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    <div class="borda"></div>
    <div>
        <h5 class="titulo fonte-8"><strong>Agente de Integração : </strong></h5>
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="2">
                        <span class="fonte-8"> Razão Social: </span>
                        <span class="fonte-10">
                        <strong> KOSTER E KOSTER CONSULTORIA EM RH LTDA </strong> 
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> Endereço: </span>
                        <span class="fonte-10">
                        <strong> AVENIDA DOUTOR MORAES SALES </strong>  
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Nº: </span>
                        <span class="fonte-10">
                        <strong> 172 </strong>  
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Bairro: </span>
                        <span class="fonte-10">
                        <strong> Centro </strong>  
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> Cidade: </span>
                        <span class="fonte-10">
                        <strong> Campinas </strong>  
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Estado: </span>
                        <span class="fonte-10">
                        <strong> SP </strong>  
                        </span>
                    </td>
                    <td width="20%">
                        <span class="fonte-8"> CEP: </span>
                        <span class="fonte-10">
                        <strong> 13.010-001 </strong> 
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> Telefone: </span>
                        <span class="fonte-10">
                        <strong> (00)0000-0000 </strong>   
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> CNPJ: </span>
                        <span class="fonte-10">
                        <strong> 21.925.427/0001-70 </strong>  
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> Representante Legal: </span>
                        <span class="fonte-10">
                        <strong> TABAJARA DIAS DE ANDRADE </strong>   
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Email: </span>
                        <span class="fonte-10">
                        <strong> TABAJARA@CLADE.COM.BR </strong>
                        </span>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
    <div class="borda"></div>
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

    <p class="pull-right"> Campinas, {{ strftime('%A, %d de %B de %Y', strtotime($cont->data_doc))}}. </p>
    <div style="height:100px;"></div><br>

    <p class="pull-left">________________________________________ <br>
        CLADE - CENTRO LATINO AMERICANO DE <br>
        DESENVOLVIMENTO <br><br>
        <span>(assinatura e carimbo) </span>
    </p>
    <p class="pull-left"  style="margin-left:130px;">
        ______________________________________________ <br>
        KOSTER E KOSTER CONSULTORIA <br> EM RH LTDA <br><br>
        <span>(assinatura do(a) agente) </span>
    </p>
    <br><br>
    @endforeach
</body>

</html>
