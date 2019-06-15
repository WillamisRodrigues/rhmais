@extends('layout/login')
@section('conteudo')

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <!-- <a class="hiddenanchor" id="signin"></a> -->

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form method="POST" action="{{ route('user-post') }}">
             {{csrf_field()}}
              <h1>Criar Conta</h1>
              <div>
                <input type="text" class="form-control"  placeholder="Usuario" required="" />
                @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="required" />
                                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
                @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
              </div>
              <div>
                <a  id="send" type="submit" class="btn btn-default submit" href="index.html">Criar</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
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
