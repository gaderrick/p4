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
<div id="app">
    <div class="header" id="myHeader">
        <div style="display:table-row">
            <div style="display:table-cell; padding-left: 10px">
                <h3>
                    Meet Organizer
                </h3>
            </div>
            <div style="display:table-cell; text-align: right; padding-right: 10px">
                @if (Auth::guest())
                    <a href="{{ url('/') }}">HOME</a> |
                    <a href="{{ route('login') }}">LOGIN</a> |
                    <a href="{{ route('register') }}">REGISTER</a>
                @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img src="{{ auth()->user()->avatar }}" alt="" width="30" class="img-circle">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

    <div class="content">
        @yield('content')
    </div>

    <div class="footer" id="myFooter">
        <div style="display:table-row">
            <div style="display:table-cell; padding-left: 10px">
                Footer bar
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
</body>
</html>