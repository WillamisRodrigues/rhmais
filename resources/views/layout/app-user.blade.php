<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- Bootstrap -->
    <link href="{{URL::asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('assets/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{URL::asset('assets/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{URL::asset('assets/css/custom.min.css')}}" rel="stylesheet">
    @yield('styles')
</head>

<body class="nav-md">

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{URL::asset('images/user.png')}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bem vindo,</span>
                            <h2> {{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a><i class="fa fa-database"></i> Cadastros <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('user_sistema.index') }}">Usuários</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{URL::asset('images/user.png')}}" alt="">{{ Auth::user()->name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <!--<li><a href="javascript:;"> Perfil</a></li>-->
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                                class="fa fa-sign-out pull-right"></i>{{ __('Sair') }}</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Desenvovido por: Trafalgar Tecnologia
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{URL::asset('assets/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{URL::asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::asset('assets/nprogress/nprogress.js')}}"></script>
    <script>
        $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })
            function createNoty(message, type) {
                var html = '<div class="alert alert-' + type + ' alert-dismissable page-alert">';
                html += '<button type="button" class="close-alert close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>';
                html += message;
                html += '</div>';
                $(html).hide().prependTo('body').slideDown();
                setTimeout(function(){ $('.close-alert').click(); }, 3000);
            };
    </script>
    @yield('scripts')
    <!-- Custom Theme Scripts -->
    <script src="{{URL::asset('assets/js/custom.min.js')}}"></script>
    @isset($message)
    @if($message)
    <script>
        $(document).ready(function() {
                        createNoty('{{$message->message}}', '{{$message->type}}');
                        $('.close-alert').click(function(e) {
                            e.preventDefault();
                            $(this).closest('.page-alert').slideUp();
                        });

                    });
    </script>
    @endif
    @endisset

</body>

</html>
