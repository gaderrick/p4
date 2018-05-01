<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pagename')</title>

    <!-- Styles -->
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="header" id="myHeader">
    <div style="display:table-row">
        <div style="display:table-cell; padding-left: 10px">
            <h3>
                Roster Maker
            </h3>
        </div>
        <div style="display:table-cell; text-align: right; padding-right: 10px">
            @if (Auth::guest())
                <a href="{{ route('home') }}" style="color:white">HOME</a> |
                <a href="{{ route('login') }}" style="color:white">LOGIN</a> |
                <a href="{{ route('register') }}" style="color:white">REGISTER</a>
            @else
                <a href="{{ route('home') }}" style="color:white">HOME</a> |
                <a href="{{ route('userdetail.index') }}" style="color:white">PARTICIPANTS</a> |
                <a href="{{ route('org.index') }}" style="color:white">ORGANIZATIONS</a> |
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                   style="color:white">
                    <img src="{{ auth()->user()->avatar }}" alt="" width="30" class="img-circle">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           style="color: blue">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</div>
@if (session('alert'))
    @if(session('alert_color'))
        <div class="col-md-12 flashAlert" style="background-color: {{ session('alert_color') }}">
    @else
        <div class="col-md-12 flashAlert">
    @endif
        {{ session('alert') }}
        </div>
@endif
        <div class="content">
            @yield('content')
        </div>

        <div style="height: 25px;"></div>

        <div class="footer" id="myFooter">
            <div style="display:table-row">
                <div style="display:table-cell; padding-left: 10px">
                    Footer bar
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        </div>
</body>
</html>