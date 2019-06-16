@extends('layout/login')
@section('titulo','RH MAIS')
@section('conteudo')

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
             {{csrf_field()}}
              <h1>LOGIN RH MAIS</h1>
               <div>
                                <input placeholder="e-mail" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
             <div>
                                <input placeholder="Senha"  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default submit">
                                    {{ __('Logar') }}
                                </button>
                                @if (Route::has('password.request'))
                                   - <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                       <div class="clearfix"></div>
              <div class="separator">
                 <!-- criar conta dentro do sistema
                <p class="change_link">Novo no sistema?
                  <a href="/user-add"> Criar Conta </a> -->
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

@endsection
