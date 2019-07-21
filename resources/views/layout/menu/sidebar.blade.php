 <!-- sidebar menu -->
 <br>
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="/home"><i class="fa fa-home"></i> Home</a> </li>
                  <li class="{{ (request()->is('estagiario/index')) ? 'active' : '' }}"><a><i class="fa fa-edit"></i> Cadastros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/estagiario">Estagiarios</a></li>
                      <li><a href="/instituicao">Instituição de Ensino</a></li>
                      <li><a href="/empresa">Empresas Parceiras</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-briefcase"></i> Contratos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/tce_contrato">TCE / Contrato(s)</a></li>
                      <li><a href="/tce_aditivo">TCE / Aditivo(s)</a></li>
                      <li><a href="/tce_recisao">TCE / Rescisão(ões)</a></li>
                      <li><a href="/tce_rescindindo">TCE / Rescindidido(s)</a></li>
                      <li><a href="/cau_convenio">CAU / Contrato A.I. e <br> Unid. Concedente</a></li>
                      <li><a href="/cce_convenio">CCE / Convênio A.I. e <br> Inst. Ensino</a></li>
                      <li><a href="/plano_estagio">Plano de Estágio</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Recesso / Férias <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/termo_recesso">Termo de Recesso / Férias</a></li>
                      <li><a href="/lista_recesso">Lista de Recesso / Férias </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Folha Pagamento <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="/folha_pagamento">Gerar Folha Pagamento</a></li>
                    <li><a href="/folha_rescisao">Gerar Folha de Rescisão</a></li>
                    <li><a href="/rendimento">Informe de Rendimentos</a></li>
                    <li><a href="/previsao_rescisao">Gerar Prévia de Rescisão</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-graduation-cap"></i> Avaliações <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="/auto_avaliacao">Auto-Avaliação <br> Estagiário(a)</a></li>
                    <li><a href="/lista_auto_avaliacao">Lista Auto-Avaliação <br> Estagiário(a)</a></li>
                    <li><a href="/avaliacao_supervisor">Avaliação Supervisor(a)</a></li>
                    <li><a href="/lista_avaliacao_supervisor">Lista Avaliação <br> Supervisor(a)</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cogs"></i> Configurações <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/user_sistema">Usuários do Sistema</a></li>
                      <li><a href="/cidade">Cidades</a></li>
                      <li><a href="/curso">Cursos</a></li>
                      <li><a href="/motivo">Motivos <br> Resição / Recesso</a></li>
                      <li><a href="/setor">Setores</a></li>
                      <li><a href="/atividade">Atividades</a></li>
                      <li><a href="/beneficio">Benefícios</a></li>
                      <li><a href="/horario">Horários</a></li>
                      <li><a href="/orientador">Orientador</a></li>
                      <li><a href="/seguro">Seguro</a></li>
                      <li><a href="/supervisor">Supervisor</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" href="/editar_conta" data-placement="top" title="Editar Conta">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{csrf_field()}}
                   </form>
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
           <!--  <script type="text/javascript">
  window.onload = function(){
    $(".child_menu").hide();
    $("li").removeClass('active active-sm');
}

  </script> -->