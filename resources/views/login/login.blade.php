@extends('layout/login')
@section('titulo','RH MAIS')
@section('conteudo')    
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>LOGIN RH MAIS</h1>
              <div>
                <input type="text" class="form-control" placeholder="Email *" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password *" required="" />
              </div>
              <div>
                <a class="btn btn-primary submit" href="index.html">Entrar</a>
                <a class="reset_pass" href="#">Esqueceu a senha?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Novo no sistema?
                  <a href="#signup" class="to_register"> Criar Conta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <img src="{{asset('images/logo.png')}}" alt="" style="width:100px;">
                  <p>©2019 RH MAIS Todos os direitos reservados</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Criar Conta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Criar</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Já Possue Conta ?
                  <a href="#signin" class="to_register"> Entrar </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                <img src="{{asset('images/logo.png')}}" alt="" style="width:100px;">
                  <p>©2019 RH MAIS Todos os direitos reservados</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
@endsection
