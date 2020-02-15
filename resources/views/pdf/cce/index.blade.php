<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> TERMO de CONVÊNIO de CONCESSÃO DE ESTÁGIO </title>
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
    <h5 class="text-center"><strong> TERMO de CONVÊNIO de CONCESSÃO DE ESTÁGIO </strong></h5>
@foreach ($contrato as $cont)
    <p class="text-center">ACORDO DE COOPERAÇÃO PARA REALIZAÇÃO DE ESTÁGIO OBRIGATÓRIO e NÃO OBRIGATÓRIO
        (Instrumentos jurídicos de que trata o Inciso II do artigo 3o, da Lei 11.788, de 25/09/2008) </p>
    <p>Celebram entre si o presente Instrumento jurídico de:
        CONVÊNIO DE CONCESSÃO DE ESTÁGIO, previsto no Artigo 8o da Legislação do Estágio, Lei 11.788 de 25/09/2008.
        As partes a seguir qualificadas,</p>
    <hr>
    <div>
        <h5><strong>Instituição de Ensino: {{$cont->nome_instituicao}}</strong></h5>
        <p> <strong> Razão Social: </strong> <span class="text-danger"> {{$cont->nome_instituicao}} </span>
            <strong> CNPJ: </strong> <span class="text-danger"> {{$cont->cnpj}} </span> </p>
        <p><strong> Endereço: </strong><span class="text-danger"> {{$cont->rua}} </span> <span>
                <strong>Nº:</strong></span><span class="text-danger">{{$cont->numero}} </span>
            <span> <strong> Bairro: </strong> <span class="text-danger"> {{$cont->bairro}} </span> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger"> {{$cont->cidade}} </span><span> <strong>Estado:</strong> <span
                    class="text-danger">{{$cont->estado}} </span> </span>
            <span> <strong> Cep:</strong> <span class="text-danger"> {{$cont->cep}}</span> </span>
            <span> <strong> Telefone: </strong> <span class="text-danger"> {{$cont->telefone}}</span></span>
        </p>
        <p><strong> Representante: </strong><span class="text-danger"> {{$cont->nome_rep}} </span> <span>
                <strong>Email:</strong></span><span class="text-danger"> {{$cont->email_rep}} </span> </p>
    </div>
    <hr>
    <div>
        <h5><strong>Agente de Integração : </strong></h5>
        <p> <strong> Razão Social: </strong><span class="text-danger"> KOSTER E KOSTER CONSULTORIA EM RH LTDA  </span> </p>
        <p><strong> Endereço: </strong> <span class="text-danger">AVENIDA DOUTOR MORAES SALES </span> <span>
                <strong>Nº:</strong></span>
            <span class="text-danger"> 1172 </span>
            <span> <strong> Bairro:</strong> <span class="text-danger">CENTRO </span> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger"> Campinas </span><span> <strong>Estado: </strong>
                <span class="text-danger">SÃO PAULO </span> </span>
            <span> <strong> CEP: </strong><span class="text-danger"> 13.010-001 </span> </span> <span> <strong>
                    Telefone: </strong><span class="text-danger"> (00)0000-0000 </span> </span>
        </p>
        <p> <strong> CNPJ: </strong> <span class="text-danger"> 22.282.192/0001-09 </span><span> </p>
        <p><strong> Representante: </strong><span class="text-danger"> MARGARIDA@RHMAISTALENTOS.COM.BR </span> <span>
                <strong>Email:</strong></span><span class="text-danger"> TABAJARA@CLADE.COM.BR </span> </p>
    </div>
    <hr>
    <p>
        CLÁUSULA 1a - O presente convênio estabelece a cooperação recíproca entre as partes, acima qualificadas, visando
        o desenvolvimento de atividades
        conjuntas e capazes de propiciarem a plena operacionalização da legislação em vigor, relacionada aos estágios de
        Estudantes, obrigatórios ou não, de
        interesses curriculares e pedagógicamente útil, com a finalidade de promover a integração dos Alunos ao mercado
        de trabalho, conforme preconizado na
        Constituição Federal vigente: Artigo 203, inciso III, Artigo 205 e Artigo 214 Inciso IV, e em consonância com o
        Artigo 82 da Lei Federal no 9.394 de
        20/12/1996 (LDB), e Lei Federal no 11.788 de 25/09/2008;
    </p>
    <p>
        CLÁUSULA 2a - A prática de estágio de Estudantes, prevista no presente instrumento, visa o aprendizado de
        competências próprias da atividade
        profissional e à contextualização curricular, objetivando o desenvolvimento do Educando para a vida cidadã e
        para o trabalho, fazendo parte do projeto
        pedagógico do curso, além de integrar o itinerário formativo do Aluno, não configurando vínculo empregatício de
        qualquer natureza, de acordo com o
        Artigo 3o da Lei Federal no 11.788 de 25/09/2008;
    </p>
    <p>
        PARÁGRAFO ÚNICO: O estágio é ato educativo escolar supervisionado, desenvolvido no ambiente de trabalho, que
        visa a preparação para o trabalho
        produtivo de Educandos que estejam frequentando o ensino regular em instituições de educação superior, de
        educação profissional, de ensino médio, da
        educação especial e dos anos finais do ensino fundamental, na modalidade profissional da educação de jovens e
        adultos;
    </p>
    <p>
        CLÁUSULA 3a - O estágio poderá ser obrigatório ou não-obrigatório, conforme determinação das diretrizes
        curriculares da etapa, modalidade e área de
        ensino e do projeto pedagógico do curso, donde deverá ser especificado no TCE - Termo de Compromisso de Estágio,
        de acordo com o Parágrafo
        Primeiro ou Segundo abaixo:
    </p>
    <p>
        PARÁGRAFO PRIMEIRO: Estágio obrigatório é aquele definido como tal no projeto do curso, cuja carga horária é
        requisito para aprovação e obtenção
        de diploma;
    </p>
    <p>
        PARÁGRAFO SEGUNDO: Estágio não-obrigatório é aquele desenvolvido como atividade opcional, ou seja, de livre
        escolha do aluno, acrescida à carga
        horária regular e obrigatória;
    </p>
    <p>
        CLÁUSULA 4a - O estágio como ato educativo escolar supervisionado, deverá ter acompanhamento efetivo pelo
        Professor Orientador da Instituição de
        Ensino e por Supervisor da parte concedente, comprovado por vistos nos relatórios das atividades, emitidos
        periodicamente em prazos não superior a 6
        (seis) meses, como também por menção de aprovação final;
    </p>
    <p>
        CLÁUSULA 5a - A (O) KOSTER E KOSTER CONSULTORIA EM RH LTDA, de acordo com o Artigo 5o da Lei Federal 11.788 de
        25/09/2008, desde já,
        fica autorizada auxiliar a Instituição de Ensino, acima qualificada, no processo de aperfeiçoamento do instituto
        do estágio nas seguintes condições:
    </p>
    <p>
        --> Identificar oportunidades de estágio;
        --> Ajustar suas condições de realização;
        --> Fazer o acompanhamento administrativo;
        --> Encaminhar e pagar negociações de seguro contra acidentes pessoais do estagiário;
        --> Cadastrar os Estudantes;
        --> Poderá repassar ao estagiário mensalmente a bolsa-auxílio, o auxílio transporte de acordo com o previsto no
        TCE - Termo de Compromisso de
        Estágio a ser firmado;
    </p>
    <p>
        PARÁGRAFO PRIMEIRO: A qualquer título é totalmente vedado a(o) KOSTER E KOSTER CONSULTORIA EM RH LTDA, a
        cobrança de qualquer valor
        financeiro da referida Instituição de Ensino, como também de seus Alunos;
    </p>
    <p>
        CLÁUSULA 6a - O encaminhamento e o pagamento do seguro contra acidentes pessoais (morte acidental ou invalidez
        por acidente), em favor do
        Estagiário (quando tratar-se de estágio NÃO obrigatório), será de responsabilidade da(o) KOSTER E KOSTER
        CONSULTORIA EM RH LTDA,
        conforme especificado no TCE - Termo de Compromisso de Estágio;
    </p>
    <p>
        CLÁUSULA 7a - Para cumprir as finalidades deste convênio caberá à Instituição de Ensino o seguinte:
    </p>
    <p>
        ( I ) Celebrar o TCE - Termo de Compromisso de Estágio com o Educando ou com seu representante ou assistente
        legal, quando ele for absoluta ou
        relativamente incapaz, e com a Parte Concedente, indicando as condições de adequação do estágio à proposta
        pedagógica do curso, à etapa e
        modalidade da formação escolar do Estudante ao horário e calendário escolar;
    </p>
    <p>
        ( II ) Indicar Professor Orientador da área a ser desenvolvida no estágio, como responsável pelo acompanhamento
        e avaliação das atividades do
        estagiário;
    </p>
    <p>
        ( III ) Avaliar as instalações da Parte Concedente do estágio e sua adequação à formação social, cultural e
        profissional do Educando ;
    </p>
    <p>
        ( IV ) Elaborar conjuntamente com a Parte Concedente e o Estagiário o Plano de Atividades do Estágio;
    </p>
    <p>
        ( V ) Exigir do Educando a apresentação periódica, em prazo não superior a 6 (seis) meses, de relatório de
        atividades;
    </p>
    <p>
        ( VI ) Zelar pelo cumprimento do TCE - Termo de Compromisso de Estágio;
    </p>
    <p>
        ( VII ) Elaborar em caso de necessidade, normas complementares e instrumentos de avaliações dos estágios de seus
        Educandos compartilhando
        posteriomente com a (o) KOSTER E KOSTER CONSULTORIA EM RH LTDA , conforme a legislação em vigor;
    </p>
    <p>
        CLÁUSULA 8a - A jornada de atividade em estágio será definida em comum acordo entre a Instituição de Ensino, a
        Parte Concedente e o Estudante
        e/ou seu representante legal, devendo constar no TCE - Termo de Compromisso de Estágio, ser compatível com as
        atividades escolares e não
        ultrapassar o seguinte:
    </p>
    <p>
        ( I ) 4 (quatro) horas diárias e 20 (vinte) horas semanais, no caso de Estudantes de educação especial, e dos
        anos finais de ensino fundamental, na
        modalidade profissional e educação de jovens e adultos;
    </p>
    <p>
        ( II ) 6 (seis) horas diárias e 30 (trinta) horas semanais, no caso de Estudantes do ensino superior, da
        educação profissional, de nível médio e do ensino
        médio regular;
    </p>
    <p>
        CLÁUSULA 9a - A duração do estágio na Parte Concedente, não poderá exceder 2 (dois) anos, exceto quando se
        tratar de Estagiário portador de
        deficiência;
    </p>
    <p>
        CLÁUSULA 10a - A partir da data de sua assinatura, o presente convênio terá vigência de 01/04/2019 a 13/04/2019,
        podendo, porém, ser denunciado
        por qualquer uma das partes, mediante comunicado por escrito, com antecedência mínima de 30 (trinta) dias;
    </p>
    <p>
        CLÁUSULA 11a - Fica eleito, o foro da cidade de CAMPINAS, onde foi celebrado o convênio, excluído qualquer
        outro, para dirimir dúvidas oriundas
        deste convênio.
    </p>
    <p>
        As partes, por estarem de acordo quanto ao cumprimento dos termos mutuamente firmados, assinam o presnete em
        duas vias de igual teor e conteúdo.
    </p>
        @php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        @endphp
    <p> Campinas, <span class="text-danger"> {{ strftime('%A, %d de %B de %Y', strtotime($cont->data_doc))}}. </span> </p>
    <div style="height:70px;"></div>
    <div class="row">
        <p class="pull-left">__________________________________ <br>
            {{$cont->nome_instituicao}} <br><br>
            <span>(assinatura e carimbo) </span>
        </p>
        <p class="pull-left" style="margin-left:30px;">
            _________________________________ <br>
            KOSTER E KOSTER CONSULTORIA <br> EM RH LTDA <br><br>
            <span>(assinatura e carimbo) </span>
        </p>
    </div>
    <div class="row">
        <p tyle="margin-top:130px;"> Testemunhas: </p>
        <br>
        <p class="pull-left" style="margin-left:30px;">
            _________________________________ <br>
            (Nome e CPF) <br><br>
        </p>
        <p class="pull-left" style="margin-left:30px;">
            _________________________________ <br>
            (Nome e CPF) <br><br>
        </p>
    </div>
    @endforeach
</body>

</html>
