<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>ADITIVO ao TCE - Termo de COMPROMISSO de ESTÁGIO</title>
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

    {{-- <h1 style="font-size:10pt;">{{ $estagiario }}</h1> --}}
    <h4 class="text-center"><strong>ADITIVO ao TCE - Termo de COMPROMISSO de ESTÁGIO.</strong></h4>
   <p> ACORDO DE COOPERAÇÃO PARA REALIZAÇÃO DE ESTÁGIO	 @foreach ($tceContrato as $tce)  {{$tce->obrigatorio == 1 ? "NÃO OBRIGATÓRIO" :  "OBRIGATÓRIO" }} @endforeach
(Instrumentos jurídicos de que trata o inciso II do artigo 3º, da Lei 11.788, de 25/09/2008.)
"TERMO DE COMPROMISSO DE ESTÁGIO, previsto no Artigo 8º da Legislação do Estágio. Lei 11.788 de 25/09/2008."</p>

    <p>"Celebram entre si o presente ADITIVO ao Convênio de Concessão de Estágio e o Termo de Compromisso de Estágio, convencionando as cláusulas e condições a seguir: "</p>
    <div class="borda"></div>
    <div>
        @foreach ($instituicoes as $inst)
        {{-- Instituição de ensino --}}
        <h5 class="titulo fonte-8"><strong>Mantenedora:</strong></h5>
        <table class="table">
            <tbody>
                <tr>
                <td colspan="2">
                        <span class="fonte-8"> Razão Social: </span>
                        <span class="fonte-10">
                        <strong> {{$inst->razao_social}} </strong>
                        </span>
                </td>
                </tr>
                <tr>
                <td>
                    <span class="fonte-8"> CNPJ: </span>
                        <span class="fonte-10">
                        <strong> {{$inst->cnpj}} </strong>
                        </span>
                </td>
                </tr>
                <tr>
                <td>
                    <span class="fonte-8"> Endereço: </span>
                    <span class="fonte-10">
                            <strong> {{$inst->rua}} </strong>
                        </span>
                </td>
                <td>
                        <span class="fonte-8">
                        Nº:
                        </span>
                        <span class="fonte-10">
                            <strong> {{$inst->numero}} </strong>
                        </span>
                </td>
                <td>
                    <span class="fonte-8">
                        Bairro:
                        </span>
                        <span class="fonte-10">
                            <strong> {{$inst->bairro}} </strong>
                        </span>
                </td>
                </tr>
                <tr>
                <td>
                        <span class="fonte-8"> Cidade: </span>
                    <span class="fonte-10">
                            <strong> {{$inst->cidade}} </strong>
                        </span>
                </td>
                <td>
                <span>
                        <span class="fonte-8"> UF: </span>
                        <span class="fonte-10">
                            <strong> {{$inst->estado}} </strong>
                        </span>
                </td>
                <td>
                <span>
                        <span class="fonte-8"> CEP: </span>
                        </span>
                        <span class="fonte-10">
                            <strong> {{$inst->cep}} </strong>
                        </span>
                </td>
                </tr>
                <tr>
                <td>
                        <span class="fonte-8"> Representante: </span>
                        <span class="fonte-10">
                            <strong> {{$inst->nome_rep}} </strong>
                        </span>
                </td>
                <td>
                        <span class="fonte-8">
                        Cargo:
                        </span>
                        <span class="fonte-10">
                            <strong> {{$inst->cargo_rep}} </strong>
                        </span>
                </td>
                </tr>
                <tr>
                <td>
                        <span class="fonte-8"> Orientador de Estágio: </span>
                        <span class="fonte-10"></span>
                        <span>
                </td>
                <td>
                        <span class="fonte-8"> Telefone: </span>
                        <span class="fonte-10">
                            <strong> {{$inst->telefone}} </strong>
                        </span>
                </td>
                </tr>
            </tbody>
        </table>
    @endforeach
    <div class="borda"></div>
     <div>
         @foreach ($empresas as $emp)
        <h5 class="titulo fonte-8"><strong>Parte Concedente:</strong></h5>
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="4">
                        <span class="fonte-8"> Razão Social: </span>
                        <span class="fonte-10">
                            <strong> {{$emp->razao_social}} </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                <td colspan="2" width="100%">
                    <span class="fonte-8"> CNPJ: </span>
                        <span class="fonte-10">
                        <strong> {{$emp->cnpj}} </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> Endereço: </span>
                        <span class="fonte-10">
                            <strong> {{$emp->rua}} </strong>
                        </span>
                    </td>
                    <td>
                    <span class="fonte-8">
                         Nº:
                        </span>
                        <span class="fonte-10"> </span>
                    </td>
                    <td width="70%">
                        <span class="fonte-8"> Bairro:
                        </span>
                        <span class="fonte-10">
                        <strong> {{$emp->bairro}} </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                  <td>
                    <span class="fonte-8"> Cidade: </span>
                    <span class="fonte-10">
                        <strong> {{$emp->cidade}} </strong>
                    </span>
                  </td>
                  <td width="40%">
                  <span class="fonte-8">
                    UF:
                    </span>
                    <span class="fonte-10">
                        <strong> {{$emp->estado}} </strong>
                    </span>
                  </td>
                  <td>
                  <span class="fonte-8">
                    CEP:
                    <span class="fonte-10">
                        <strong> {{$emp->cep}} </strong>
                    </span>
                  </td>
                  <td width="70%">
                  <span class="fonte-8">
                        Telefone:
                    </span>
                    <span class="fonte-10">
                        <strong> {{$emp->telefone}} </strong>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td width="100%" colspan="2">
                       <span class="fonte-8"> Representante: </span>
                        <span class="fonte-10">
                            <strong> {{$emp->nome_rep}} </strong>
                        </span>
                  </td>
                  <td>
                    <span class="fonte-8">
                        Cargo:
                        </span>
                    <span class="fonte-10">
                            <strong> {{$emp->cargo_rep}} </strong>
                        </span>
                  </td>
                </tr>
                @endforeach
            @foreach ($supervisores as $sup)
                <tr>
                  <td colspan="3" width="100%">
                    <span class="fonte-8">Supervisor de estágio: </span>
                   <span class="fonte-10">
                        <strong> {{$sup->nome}} </strong>
                    </span>
                  </td>
                  <td colspan="2">
                     <span>
                     <span class="fonte-8"> Cargo: </span>
                    <span class="fonte-10">
                        <strong> {{$sup->cargo}} </strong>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                   <span class="fonte-8"> Formação Acadêmica: <span>
                    <span class="fonte-10">
                        <strong> {{$sup->formacao}} </strong>
                    </span>
                  </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="borda"></div>
    <div>
        @foreach ($estagiarios as $est)
        <h5 class="titulo fonte-8"><strong>A UNIDADE CONCEDENTE, juntamente com a INSTITUIÇÃO DE ENSINO, e o ESTUDANTE.</strong></h5>
        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <span class="fonte-8"> Estudante: </span>
                        <span class="fonte-10">
                            <strong> {{$est->nome}} </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fonte-8"> Endereço: </span>
                        <span class="fonte-10">
                            <strong> {{$est->rua}} </strong>
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8">
                        Nº:
                        </span>
                        <span class="fonte-10">
                            <strong> {{$est->numero}} </strong>
                        </span>
                    </td>
                    <td>
                        <span class="fonte-8">
                        Bairro:
                        </span>
                        <span class="fonte-10">
                            <strong> {{$est->bairro}} </strong>
                        </span>
                    </td>
                </tr>
                <tr>
                  <td>
                    <span class="fonte-8"> Cidade: </span>
                    <span class="fonte-10">
                        <strong> {{$est->cidade}} </strong>
                    </span>
                  </td>
                  <td>
                    <span class="fonte-8">
                        UF:
                    </span>
                    <span class="fonte-10">
                        <strong> {{$est->estado}} </strong>
                    </span>
                  </td>
                  <td>
                        <span class="fonte-8">
                        CEP:
                        </span>
                        <span class="fonte-10">
                            <strong> {{$est->cep}} </strong>
                        </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fonte-8">  Telefone: </span>
                    <span class="fonte-10">
                        <strong> {{$est->celular}} </strong>
                    </span>
                  </td>
                  <td>
                       <span class="fonte-8">
                        Email:
                        </span>
                        <span class="fonte-10">
                            <strong> {{$est->email}} </strong>
                        </span>
                  </td>
                </tr>
                <tr>
                 <td>
                    <span class="fonte-8"> CPF: </span>
                    <span class="fonte-10">
                        <strong> {{$est->cpf}} </strong>
                    </span>
                 </td>
                 <td>
                 <span>
                    <span class="fonte-8"> RG:
                    </span>
                    <span class="fonte-10">
                        <strong> {{$est->rg}} </strong>
                    </span>
                 </td>
                 <td>
                     <span>
                    <span class="fonte-8">
                      RA:
                      </span>
                    <span class="fonte-10">
                     <strong> {{$est->matricula}} </strong>
                     </span>
                 </td>
                </tr>
                <tr>
                 <td>
                    <span class="fonte-8"> Curso:
                    </span>
                    <span class="fonte-10">
                        <strong> {{$est->curso}} </strong>
                    </span>
                 </td>
                 <td>
                     <span class="fonte-8">
                           Período/Ano:
                    </span>
                    </span>
                    <span class="fonte-10">
                        <strong> {{$est->periodo}} </strong>
                    </span>
                 </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach
    <div class="borda">
    <p class="text-justify">1) Período de vigência do Estágio: </p>

    <p class="text-justify"> de:
        @foreach ($tceContrato as $tce)
        <strong>{{date('d/m/Y', strtotime($tce->data_inicio))}}</strong> a <strong> {{date('d/m/Y', strtotime($tce->data_fim))}}</strong></p>
    @endforeach
        @foreach ($horarios as $hor)
    <p class="text-justify"> 2) - Jornada: {{$hor->descricao}}</p>
@endforeach
    <p class="text-justify"> <strong>3) Atividade do Estagiário(a):
        @foreach ($atividades as $ativ)
    <p class="text-justify">{{$ativ->nome}}
    </p>
    @endforeach
     @foreach ($supervisores as $sup)
    <p class="text-justify"> <strong> Supervisor(a) do estágio: </strong>{{$sup->nome}}  - {{$sup->formacao}} - {{$sup->cargo}} - {{$sup->email}} - {{$sup->telefone}}
@endforeach
   @foreach ($tceContrato as $tce)
    <p class="text-justify"><strong> 4) Valor da Bolsa-estágio + Auxílio : </strong> No período do estágio o Estagiário receberá, diretamente da Parte Concedente, uma Bolsa-estágio mensal no valor de R$ {{ $tce->bolsa }}
        @endforeach
        @foreach ($beneficios as $ben)
        +  {{$ben->nome}}  , pagos até o dia 10 do mês subsequente ao vencido.</p>
        @endforeach
    <p class="text-justify">
        <strong> 5 - Apólice Coletiva de Acidentes Pessoais nº 651805, garantido pela SULAMÉRICA SEG. E PREVIDÊNCIA (R$16.131 MIL REAIS).

    <p class="text-justify"> <strong>6 - Descrição do(s) Motivo(s) deste aditivo: Valor da Bolsa - A pedido da unidade concedente</strong> - Sempre que necessário, o estagiário deverá fornecer

        {{-- @php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        @endphp --}}
        @foreach ($tceContrato as $tce)
        {{-- <p class="pull-right"> Campinas, <strong> {{ strftime('%A, %d de %B de %Y', strtotime($tce->data_doc))}}. </strong> </p> --}}
        <p class="pull-right"> Campinas, <strong> {{ date('d/m/Y', strtotime($tce->data_doc)) }}. </strong> </p>
        @endforeach
        <div style="height:70px;"></div>
        <div class="row">
            @foreach ($instituicoes as $inst)
            <p class="pull-left" style="width:320px!important;">________________________________________________________
            <br>
            <span style="word-wrap: break-word!important; ">
             {{$inst->razao_social}}
             </span>
                    @endforeach
            </p>
            <p class="pull-left" style="margin-left:40px; width:320px!important;">
                @foreach ($empresas as $emp)
                __________________________________________________________ <br>
               <span style="word-wrap: break-word!important; ">{{$emp->razao_social}} </span>
                @endforeach
            </p>
        </div>
        <div style="height:100px;"></div>
        <div class="row">
            <p class="pull-right" style="margin-left:10px;">
                ____________________________________________________________

                 <br>
                Koster & Koster Consultoria em RH LTDA ME
            </p>
            <p class="pull-left">
                _________________________________________________________<br>
                @foreach ($estagiarios as $est)
                {{$est->nome}}
                @endforeach
            </p>
        </div>
        <div style="height:80px;"></div>
        <div class="row">
            <p class="pull-left">
                __________________________________________________________<br>
                @foreach ($empresas as $emp)
                 {{$emp->nome_rep}}
                 @endforeach
            </p>
        </div>
</body>

</html>