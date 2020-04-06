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
        <img src="{{ public_path('/images/logo-rhmais.png') }}" style="margin-left:270px;  margin-top:12px; width:20%;">
    </figure>

    <h5 class="text-center"><strong> TERMO de CONVÊNIO de CONCESSÃO DE ESTÁGIO </strong></h5>
@foreach ($contrato as $cont)
    <p class="text-center">ACORDO DE COOPERAÇÃO PARA REALIZAÇÃO DE ESTÁGIO OBRIGATÓRIO e NÃO OBRIGATÓRIO
        (Instrumentos jurídicos de que trata o Inciso II do artigo 3o, da Lei 11.788, de 25/09/2008) </p>
    <p>Celebram entre si o presente Instrumento jurídico de:
        CONVÊNIO DE CONCESSÃO DE ESTÁGIO, previsto no Artigo 8o da Legislação do Estágio, Lei 11.788 de 25/09/2008.
        As partes a seguir qualificadas,</p>
        <div class="borda"></div>
    <div>
        <h5 class="titulo fonte-8"><strong>Instituição de Ensino: {{$cont->nome_instituicao}}</strong></h5>
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="2">
                        <span class="fonte-8"> Razão Social: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->nome_instituicao}} </strong>
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
                    <td colspan="2">
                        <span class="fonte-8"> Endereço: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->rua}} </strong>
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
                        <span class="fonte-8"> Estado: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->estado}} </strong>
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> CEP: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->cep}} </strong>
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Telefone: </span>
                        <span class="fonte-10">
                        <strong> {{$cont->telefone}} </strong>
                        </span>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <span class="fonte-8"> Representante: </span>
                        <span class="fonte-10">
                        <strong>{{$cont->nome_rep}} </strong>
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
    </div>
    <div class="borda"></div>
    <div>
        <h5 class="titulo fonte-8"><strong>Agente de Integração : </strong></h5>
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="3">
                        <span class="fonte-8"> Razão Social: </span>
                        <span class="fonte-10">
                        <strong> KOSTER E KOSTER CONSULTORIA EM RH LTDA  </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> CNPJ: </span>
                        <span class="fonte-10">
                        <strong>  <strong> 22.282.192/0001-09 </strong>  </strong>
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Telefone: </span>
                        <span class="fonte-10">
                        <strong> (00)0000-0000 </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <span class="fonte-8"> Endereço: </span>
                        <span class="fonte-10">
                        <strong> AVENIDA DOUTOR MORAES SALES </strong>
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8"> Nº: </span>
                        <span class="fonte-10">
                        <strong> 1172 </strong>
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
                    <td width="30%">
                        <span class="fonte-8"> CEP: </span>
                        <span class="fonte-10">
                        <strong> 13.010-001 </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> Representante: </span>
                        <span class="fonte-10">
                        <strong>Koster </strong>
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
        {{-- @php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        @endphp --}}
    {{-- <p> Campinas, {{ strftime('%A, %d de %B de %Y', strtotime($cont->data_doc))}}. </p> --}}
    <p> Campinas, {{ date('d/m/Y', strtotime($cont->data_doc))}}. </p>
    <div style="height:70px;"></div>
    <div class="row">
            <p class="pull-right" style="margin-left:10px;">
                ____________________________________________________________

                 <br>
                Koster & Koster Consultoria em RH LTDA ME
                <br><br>
            <span>(assinatura e carimbo) </span>
            </p>
            <p class="pull-left">
                _________________________________________________________<br>
                {{$cont->nome_instituicao}} <br><br>
               (assinatura e carimbo)
            </p>
        </div>
        <div style="height:80px;"></div>
        <div class="row">
            <p class="pull-right" style="margin-left:10px;">
                ____________________________________________________________

                 <br>
                 (Nome e CPF)
            </p>
            <p class="pull-left">
                _________________________________________________________<br>
                (Nome e CPF)
            </p>
        </div>
    @endforeach
</body>

</html>
