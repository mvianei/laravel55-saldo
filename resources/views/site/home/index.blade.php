<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body class="sidebar-mini skin-red pace-done fixed">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ route('home') }}">Home</a><br>
            <a href="{{ route('profile') }}"><img src="img/bootstrap4.jpg" height="30pt"> Meu perfil</a><br>
            <a href="{{ route('profile_material') }}"><img src="img/material_lite.png" height="30pt"> Meu perfil Material Lite</a><br>
            <a href="{{ route('profile_materialize') }}"><img src="img/materialize.png" height="30pt"> Meu perfil Materialize</a><br>
            <a href="{{ route('profile_mdbootstrap') }}"><img src="img/logo-mdb-jquery-small.png" height="30pt"> Meu perfil MDBootstrap</a><br>
            <a href="{{ route('profile_framework7') }}"><img src="img/framework7.jpg" height="30pt"> Meu perfil Framework7</a><br>
            <a href="{{ route('profile_mdc') }}"><img src="img/ic_material_design_24px.svg" height="30pt"> Meu perfil MDC</a><br>
            @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
</body>

</html>
