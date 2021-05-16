<!DOCTYPE HTML>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grupo Lions - Patrimônio Monitorado</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link rel="shortcut icon" href="img/leao-preto.png" />

  </head>

<body>

  <div class="login-page">
    <div class="form">

      <form class="register-form">
        <input type="text" placeholder="name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email address"/>
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>

      <form class="form-signin" id="form_login" method="post" action="{{ route ('sendForgot') }}">

            {{ csrf_field() }}

            <div class="alert alert-danger" style="display: none;" id="message" role="alert">

            </div>

        <div>
            <img src="img/logo-lions2.png" width="240px" style="margin: 40px 0;">
        </div>

        <h6>Digite o email para recuperação da senha</h6>

        @if(session('mensagem'))
            <div class="alert alert-success">
                <p>{{session('mensagem')}}</p>
            </div>
        @endif

        <input type="text" placeholder="Email" name="email" id="email" />

        <button class="btn btn-lg btn-success btn-block mt-2" type="submit">Enviar</button>
      </form>

    </div>
  </div>

</body>

<html>
