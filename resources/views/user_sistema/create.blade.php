@extends('layout/login')
@section('conteudo')

<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="btn btn-primary submit" href="/home" style="margin:20px;">
        <i class="fa fa-home"></i>
        Voltar ao Painel</a>
    <!-- <a class="hiddenanchor" id="signin"></a> -->

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{ route('user_sistema.store') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h1>Criar Conta</h1>
                    <div>
                        <input id="name" type="text" class="form-control " placeholder="Usuario" required=""
                            name="name" />
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <input id="email" type="email" class="form-control" placeholder="Email" required="required"
                            name="email" />
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <input id="password" type="password" class="form-control" placeholder="Senha" required=""
                            name="password" />
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password_confirmation">
                    </label>
                    <input type="password" class="form-control" placeholder="Confirmação de senha" required=""
                        name="password_confirmation" />
                    <div>
                        <button class="btn btn-default">Cradastrar</button>
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
