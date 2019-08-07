<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> TCE - TERMO DE COMPROMISSO DE ESTÁGIO </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <img src="https://www.rhmaistalentos.com.br/imagens/logo-site.png" style="margin-left:250px; width:30%;">
    <h1 style="font-size:10pt;">{{ $estagiario }}</h1>
    <h5 class="text-center"><strong> TCE - TERMO DE COMPROMISSO DE ESTÁGIO </strong></h5>
    <hr>
    <p>Pelo presente instrumento particular denominado TERMO DE COMPROMISSO DE ESTÁGIO com base na Lei
Federal 11.788 de 25/09/2008, as partes abaixo nomeadas no item 1 (um) acordam o que segue </p>
    <hr>
    <div>
        <h5><strong>INSTITUÍÇÃO DE ENSINO</strong></h5>
        <p> <strong> Razão Social: </strong> <span class="text-danger">  </span> <strong> CNPJ: <span class="text-danger">  </span> </strong> </p>
        <p><strong> Endereço: </strong><span class="text-danger"> </span> <span> <strong>Nº:</strong></span><span class="text-danger">  </span>
        <span> <strong> Bairro: <span class="text-danger"> </strong></span> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger">  </span><span> <strong>UF: <span class="text-danger"> </span></strong> </span>
        <span> <strong> CEP: <span class="text-danger"> </span> </strong></span>
        </p>
        <p> <strong> Representante: <span class="text-danger"> </span> </strong> <span> <strong> Cargo: <span class="text-danger">  </span></strong></span> </p>
        <p> <strong> Orientador de estágio: </strong>  <span class="text-danger"> </span>
        <span> <strong> Telefone: </strong><span class="text-danger">  </span> </span>
        </p>
    </div>
    <hr>
    <div>
        <h5><strong>UNIDADE CONCEDENTE</strong></h5>
        <p> <strong> Razão Social: </strong><span class="text-danger"> </span><strong> CNPJ: <span class="text-danger"> </span> </strong> </p>
        <p><strong> Endereço: </strong> <span class="text-danger"> </span> <span> <strong>Nº:</strong></span>
        <span class="text-danger">  </span>
        <span> <strong> Bairro: <span class="text-danger"> </span></strong> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger"> </span><span> <strong>UF:
        <span class="text-danger"> </span></strong> </span>
        <span> <strong> CEP:<span class="text-danger">  </span> </strong></span>  <span> <strong> Telefone: </strong><span class="text-danger">  </span> </span>
        </p>
        <p> <strong> Representante: </strong> <span class="text-danger">  </span><span><strong> Cargo: </strong> <span class="text-danger">  </span> </span> </span> </p>
        <p> <strong> Supervisor de estágio: </strong> <span class="text-danger"> </span><span> <strong> Cargo:</strong> <span class="text-danger">  </span> </span>
        </p>
        <p> <strong> Formação Acadêmica: </strong> <span class="text-danger"> </span>
        </p>
    </div>
    <hr>
    <div>
    @foreach ($estagiario as $dados)
        <h5><strong>A UNIDADE CONCEDENTE, juntamente com a INSTITUIÇÃO DE ENSINO, e o ESTUDANTE.</strong></h5>
        <p> <strong> Estudante: </strong> <span class="text-danger"> {{$dados->nome}} </span> <strong></p>
        <p><strong> Endereço: </strong><span class="text-danger">  </span> <span> <strong>Nº:</strong></span>
        <span class="text-danger">  </span>
        <span> <strong> Bairro: <span class="text-danger"> </span> </strong> </span> </p>
        <p><strong> Cidade: </strong><span class="text-danger">{{$dados->nome_cidade}} </span> <span> <strong>UF: <span class="text-danger">  </span></strong> </span>
        <span> <strong> CEP: <span class="text-danger">  </span> </strong></span>
        </p>
        <p><strong> Telefone: </strong><span class="text-danger"> {{$dados->celular}} </span> <span> <strong>Email: <span class="text-danger">  </span></strong> </span>
        </p>
        <p><strong> CPF: </strong><span class="text-danger"> {{$dados->cpf}} </span> <span> <strong>RG: <span class="text-danger"> {{$dados->rg}} </span></strong> </span>
        <span> <strong> RA: <span class="text-danger"> </span> </strong></span>
        </p>
        <p><strong> Curso: </strong><span class="text-danger">  </span> <span> <strong>Período/Ano: <span class="text-danger">  </span></strong> </span>
        </p>
    </div>
    @endforeach
    <hr>
    <p class="text-justify">Celebram entre si, através do <strong> Agente de Integração </strong> Koster & Koster Consultoria em Recursos Humanos LTDA ME,
CNPJ: 21.925.427/0001-70, o TERMO DE COMPROMISSO DE ESTÁGIO, de acordo com a Lei n° 11.788/2008, sob
as seguintes condições: </p>

<p class="text-justify"> <strong> CLÁUSULA 1ª</strong> - O Termo de Compromisso de Estágio não caracteriza a vinculação empregatícia entre o estudante e a
Unidade Concedente. O presente Termo visa assegurar a complementação de aprendizagem através de treinamento
prático, integração social e desenvolvimento do Estagiário, com acompanhamento efetivo pelo professor orientador de
estágio da Instituição de Ensino e por supervisor da Parte Concedente. Pode ser OBRIGATORIO ou NÃO
OBRIGATÓRIO.</p>
<p class="text-justify"> <strong> CLÁUSULA 2ª </strong> - Este termo de Compromisso de Estágio terá vigência de <span class="text-danger"> 09/02/2018 </span> a <span class="text-danger"> 31/12/2018</span>, podendo ser
rescindido a qualquer momento por qualquer uma das partes sem ônus, multas ou aviso prévio através do Termo de
Rescisão ou podendo ser prorrogado através de Termo Aditivo.</p>

<p class="text-justify"> <strong> CLÁUSULA 3ª </strong> - As atividades de estágio se farão de <span class="text-danger"> segunda a sexta-feira das 14h00 horas às 20h00, perfazendo 30
horas semanais </span>. A jornada deverá ser compatível com o horário escolar do Estudante, sendo que durante as férias ou
recessos escolares, outra jornada de atividades poderá ser estabelecida entre as partes.
</p>

<p class="text-justify"> <strong> CLÁUSULA 4ª </strong> - O estagiário tem direito a <strong> férias remuneradas </strong> de 30 (trinta) dias, após doze meses de estágio na mesma
Empresa ou, o proporcional ao tempo de estágio, se menos de um ano.</p>

<p class="text-justify"> <strong> CLÁUSULA 5ª </strong> - As atividades desenvolvidas deverão ser compatíveis com o Contexto Básico da Profissão do curso do
estudante.
ÚNICO - As atividades poderão ser ampliadas, reduzidas, alteradas, substituídas de acordo com a necessidade, sendo as
atividades inicialmente desenvolvidas pelo estudante: </p>
 <p class="text-justify"><span class="text-danger"> Atendimento ao Cliente, Controle e Organização de Planilhas (Excel), Suporte de Pagamento a Clientes, Pesquisa de Contatos
de Clientes, Organização e Atuação de Filas de Cobrança.</span>
</p>
<p class="text-justify"> <strong> CLÁUSULA 6ª </strong> - A Unidade Concedente remunerará em <span class="text-danger"> R$ 600,00 (Seiscentos reais/mensais) </span>, o Estudante, a título de bolsa-
auxílio, quantia esta que será paga a partir do mês subsequente ao vencimento,<span class="text-danger"> mais vale transportes </span>. O valor estabelecido
poderá variar segundo a sua frequência mensal, grau de escolaridade, atividades desempenhadas, entendimento entre as partes
ou outro motivo qualquer.</p>
<p class="text-justify"><strong> CLÁUSULA 7ª </strong> - Aplica-se ao estagiário a legislação relacionado a saúde e segurança no trabalho, sendo sua implementação
de responsabilidade da UNIDADE CONCEDENTE do estágio.</p>
<p class="text-justify">
<strong> CLÁUSULA 8ª </strong> - O ESTAGIÁRIO deverá cumprir de forma moral, ética e plena, o Programa de Estágio e as normas internas
da UNIDADE CONCEDENTE, preservando o sigilo e a confidencialidade nas informações a que tiver acesso no decorrer do
seu estágio junto a parte Concedente. </p>

<p class="text-justify"> <strong> CLÁUSULA 9ª </strong> - Sempre que necessário, o estagiário deverá fornecer informações para o acompanhamento e supervisão do
Programa de Estágio, dentro do prazo estipulado. </p>
<p class="text-justify"> <strong> CLÁUSULA 10ª</strong> - Na eventual conclusão, abandono ou trancamento do curso, bem como o não cumprimento das normas
estabelecidas neste Termo de Compromisso de Estágio, haverá a interrupção automática do referido Termo.</p>

<p class="text-justify"> <strong> CLÁUSULA 11ª</strong> - Fica a Koster & Koster Consultoria em Recursos Humanos LTDA ME como centralizador do processo de
estágio entre a Unidade Concedente, Instituição de Ensino e o Estudante. Quaisquer alterações que se façam necessárias neste
Termo de Compromisso de Estágio, a Koster & Koster Consultoria em Recursos Humanos LTDA ME deverá ser comunicada. </p>

<p class="text-justify"><strong> CLÁUSULA 12ª</strong> – Na vigência do presente Termo. O Estagiário estará incluído na cobertura do Seguro Contra Acidentes
Pessoais proporcionado através da Seguradora <span class="text-danger"> SULAMÉRICA VIDA SIMPLES </span>, numero de proposta/apólice <span class="text-danger"> 6518050001 </span>
com capital de <span class="text-danger"> R$ 15.678,00 </span> (<span class="text-danger"> Quinze mil seiscentos e setenta e oito reais </span>), sob a responsabilidade da Koster & Koster
Consultoria em Recursos Humanos LTDA ME. </p>
<p class="text-justify">
Parágrafo único - O texto completo da Lei Federal 11.788 de 25 de setembro de 2008, em anexo, faz parte integrante do
presente instrumento. </p>
<h4> DO AGENTE DE INTEGRAÇÃO: </h4>
<p class="text-justify">
Atuar como auxiliar no processo de aperfeiçoamento do estágio identificando as oportunidades, ajustando suas condições de
realização, fazendo o acompanhamento administrativo através de verificação in-loco e/ou através de relatórios, efetivar o
Seguro Contra Acidentes Pessoais e cadastrar os estudantes (§1o do art. 5o da Lei no 11.788/08), selecionando os locais de
estágio e organizando o cadastro dos concedentes das oportunidades de estágio (art. 6o da Lei no 11.788/08).
</p>
<p class="text-justify"> Parágrafo único: Se durante a vigência deste TCE, o Agente de Integração, em sua condição de legitimidade, atribuições e
responsabilidades que são do conhecimento das partes contratantes, identificar violação dos compromissos assumidos por
quaisquer das partes, cessarão suas responsabilidades legais, técnicas e administrativas, devendo o mesmo cientificar, por
escrito, todas as partes envolvidas.</p>
<p class="text-justify"> E por assim estarem de acordo, assinam este Termo de Compromisso de Estágio em 4 (quatro) vias de igual teor.</p>
<p>
 <p class="pull-right"> Campinas, <span class="text-danger"> 25 de junho de 2019. </span> </p>
<div style="height:50px;"></div>

<p class="pull-left">__________________________________ <br>
Escola Estadual Carlos Gomes
</p>
<p class="pull-left" style="margin-left:30px;">
_________________________________ <br>
Vasconcelos Pires e A. Cobranças LTDA
</p>
<br>
<p>
_______________________________________ <br>
Koster & Koster Consultoria em RH LTDA ME
</p>
<p class="pull-left">
 _______________________________<br>
Aline Rafaela Lima
</p>
<p class="pull-left" style="margin-left:30px;">
_________________________________<br>
Responsável legal
</p>
</body>
</html>