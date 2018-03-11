<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a href="{{route('home')}}" class="navbar-item">
                        Лого
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">Aaaaaaaaaaa</a>
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">Bbbbbbbbb</a>
                        <a href="#" class="navbar-item is-tab is-hidden-mobile">Cccccccccc</a>
                    </div>
                    <div class="navbar-end">
                        <b-dropdown>
                            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu" slot="trigger">
                                <span>Hey, Alexey</span>
                                <span class="icon is-small"> <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                            </button>
                            <b-dropdown-item><a href="#" class="dropdown-item"><i class="fa fa-fw fa-user-circle-o"></i></span> @lang('account.profile')</a></b-dropdown-item>
                            <b-dropdown-item><a href="#" class="dropdown-item"><i class="fa fa-fw fa-bell"></i></span> @lang('account.notifications')</a></b-dropdown-item>
                            <b-dropdown-item><a href="#" class="dropdown-item"><i class="fa fa-fw fa-cog"></i></span> @lang('account.settings')</a></b-dropdown-item>
                            <hr class="dropdown-divider">
                            <b-dropdown-item><a href="#" class="dropdown-item"><span class="icon"><i class="fa fa-fw fa-sign-out"></i></span> @lang('auth.logut')</a></b-dropdown-item>

                        </b-dropdown>
                        @guest
                            <a href="{{route('login') }}" class="navbar-item is-tab">@lang('auth.login')</a>
                            <a href="{{route('register') }}" class="navbar-item is-tab">@lang('auth.register')</a>
                        @endguest

                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
