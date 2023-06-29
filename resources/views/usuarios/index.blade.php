@extends('includes.base')

@section('title', 'Usuarios')

@section('content')

@if (session('sucesso'))
    <div style="background-color:rgb(255, 176, 251);color:rgb(157, 59, 255);">
    </div>
@endif

<form action="{{route('produtos')}}" method="post">

    @csrf

    </select>

</form>
<br>
<table border="1" style="border-color:rgba(51, 0, 145, 0.726)">
    <tr>
        <th>Nome</th>
        <th>Email</th>
    </tr>

    @foreach ($usuarios as $usuario)
    <tr>
        <td><a href="{{ route('produtos.view', $usuario->id) }}">{{ $usuario->name }}</a></td>
        <td>{{ $usuario->email }}</td>
        <td><a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a></td>
        <td><a href="{{ route('usuarios.delete', $usuario->id) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>

{{$prods->links('vendor.pagination.default')}}

@endsection
