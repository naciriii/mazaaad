<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mazaad') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
    .btn.btn-fill {
    background-color: #f26667;
    color: #fff;
    border-color: transparent;
    }</style>
</head>
<body>
    <div id="app" style="background:#fff;">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                   
                        <a class="navbar-brand" style="margin-top:-10px" href="{{route('home.index')}}"><img src="{{asset('assets/images/flogo.png')}}" alt="" class="img-responsive"></a> 
                   
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                         <li class="dropdown">
                                <a @if(session('locale') == 'en')
                                href="{{route('changeLanguage',['lang'=>'en'])}}"
                                @else
                                  href="{{route('changeLanguage',['lang'=>'fr'])}}"
                                @endif
                                 class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 @if(session('locale') == 'en')
                                 English
                                 @else
                                 Francais
                                 @endif
                                     <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                     <a @if(session('locale')=='en')
                                      href="{{route('changeLanguage',['lang'=>'fr'])}}"
                                      @else
                                       href="{{route('changeLanguage',['lang'=>'en'])}}"
                                     @endif
                                    >  @if(session('locale') == 'en')
                                 Francais
                                 @else
                                 English
                                 @endif</a>

                                      
                                    </li>
                                </ul>
                            </li>
             <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">@lang('auth.register')</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
