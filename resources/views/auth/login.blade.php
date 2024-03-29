@extends('layouts.not-logged-layout')
@section('content')
<!-- banner -->
<div class="banner about-banner">
   <div class="container">
      <h2>Entrar</h2>
      <div class="agileits-line"></div>
   </div>
</div>
<!-- //banner -->
<!-- Login form -->
<form method="POST" action="" class="form-horizontal">
    @csrf
    <fieldset>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <p class="alert alert-danger">{{ $error }}</p>
                    </div>
                </div>
            @endforeach
        @endif
        <!-- Text input-->
        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <label class="control-label" for="textinput">Login</label>
                <input id="textinput" name="username" type="text" placeholder="Digite o nome do Usuário"
                    class="form-control" required>
            </div>
        </div>
        <!-- Password input-->
        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <label class="control-label" for="passwordinput">Senha</label>
                <input id="passwordinput" name="password" type="password" placeholder="Digite sua senha"
                    class="form-control" required>
            </div>
        </div>
        <!-- Submit button -->
        <div class="col-md-4 col-md-offset-4">
            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Entrar</button>
        </div>
        <div class="col-md-4 col-md-offset-4 text-center">
            <a href="">Esqueceu sua senha?</a>
        </div>
        <div class="col-md-4 col-md-offset-4 text-center">
            <a href="{{ route('register') }}">Registre-se</a> 
        </div> 
    </fieldset>
</form>
<!-- //Login form -->
@endsection