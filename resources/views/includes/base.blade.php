<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{asset("CSS/style.css")}}">

</head>
<body>

    <h1>Sitezito UwU 👉🏻👈🏻</h1>

    <div>
        @if (Auth::user())
        Bodia{{Auth::user()->name}}.
        <br>
        <a href="{{route ('logout') }}">Sair</a>

        @else
            <a href="{{route('login')}}">Fazer login login!!!</a>
        @endif
    </div>
    <!-- Menu -->
    <div>
        <ul>
            <li><a href="{{ route('home')}} ">Home</a></li>
            <li><a href="{{ route('produtos')}}">Produtos</a></li>
            <li><a href="{{ route('usuarios')}}">Usuários</a></li>
        </ul>
    </div>
    <hr style="height:6px;background-color:rgb(241, 112, 253)">

    {{-- Conteúdo --}}
    @yield('content')

</body>
</html>
