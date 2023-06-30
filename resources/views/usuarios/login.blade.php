<div style="border:1px solid rgb(162, 96, 224); width:50%; margin:0 auto:">

    <h1>LOGIN LOGIN!!!</h1>

    @if (session('erro'))
    <div>{{ session('erro')}}</div>
    @endif

    <form action="{{ url()->current() }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="E-mail">
        <br>
        <input type="passwod" name="password" placeholder="Senha">
        <br><br>
        <input type="submit"  value="Login please">

    </form>

</div>
