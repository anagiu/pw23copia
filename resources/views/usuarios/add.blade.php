@extends('includes.base')

@section('title', 'Usuarios - Adicionar')

@section('content')
    <h2>Adicione um Usuário</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ url()->current() }}" method="post">

        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{ old('name', $usuario->name ?? '') }}">
        <br>
        <input type="email" name="email" step="0.01" placeholder="email" min="0" value="{{ old('email', $usuario->email ?? '') }}">
        <br>
        <input type="text" name="password" placeholder="pasword" min="0" value="{{ old('password', $usuario->password ?? '') }}">
        <hr width="30%" align="left">
        <input type="submit" value="Gravar">
    </form>
@endsection
