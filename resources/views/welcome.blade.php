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

      <form class="form-signin" id="form_login" method="post" >

            {{ csrf_field() }}

            <div class="alert alert-danger" style="display: none;" id="message" role="alert">

            </div>

        <div>
            <img src="img/logo-lions2.png" width="240px" style="margin: 40px 0;">
        </div>

        <input type="text" placeholder="Email" name="email" id="email" />
        <input type="password" id="password" name="password" placeholder="Senha"/>
        <span class="material-icons" onclick="mostrarsenha();" style="position: absolute;top: 280px;
        right: 60px;cursor: pointer;">remove_red_eye</span>

        <a href="{{ route('forgot') }}" style="color:black;text-decoration:none">Esqueci a senha</a>

        <script>
        function mostrarsenha() {
          var tipo = document.getElementById("password");
          if(tipo.type === "password") {
            tipo.type = "text";
          }
          else {
            tipo.type = "password"
          }
        }

        </script>

        <button class="btn btn-lg btn-success btn-block mt-2" type="submit">login</button>
      </form>

    </div>
  </div>

  <script>
  $(document).ready(function () {

      $('#form_login').on('submit', function (event) {

          event.preventDefault();

          $.ajax({
              type: 'POST',
              url: "/login",
              dataType: 'json',
              data: new FormData(this),
              contentType: false,
              cache: false,
              processData: false,
              success: function (data) {
                  if (data.login === true) {
                      window.location.href = "{{route ('dashboard')}}";
                  } else {
                      $('#message').css('display', 'block');
                      $('#message').html(data.message);
                  }
              }
          });
          return false;


      });
  });
        </script>


</body>

<html>
