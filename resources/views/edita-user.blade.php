<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="js/ShowPassword.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="container border mt-5">
        <div class="row">
          <div class="col">

            <h4 class="mt-5">Editar Usuário</h4>
            <hr>

              <form class="mt-4 mb-5" method="POST" action="{{ route ('user/update', ['id' => $registro->id]) }}">

              {{ csrf_field() }}

                <div class="form-group">
                  <label>Nome</label>
                  <input type="text" name="name" class="form-control" value="{{$registro->name}}" placeholder="Nome">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" value="{{$registro->email}}" placeholder="Lions@lions.com">
                </div>

                <div class="form-group">
                  <label>Senha</label>
                  <input type="password" id="password" name="password"class="form-control" minlength="6" maxlength="8" value="" placeholder="***********">
                  <span class="material-icons" onclick="mostrarsenha();" style="position: absolute;margin-top:-30px;
                  right: 60px;cursor: pointer;">remove_red_eye</span>
                  <br>
                    <input data-toggle="modal" data-target="#ModalAtualizarSenha" type="button" value="Atualizar Senha" class="btn btn-dark">
                </div>

                <button type="submit" class="btn btn-dark mt-4">Salvar</button>

              </form>

              <!-- Modal -->
            <div class="modal fade" id="ModalAtualizarSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atualizar Senha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <form method="POST" action="">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nova Senha:</label>
                      <input type="password" id="novaSenha" name="novaSenha" class="form-control" id="recipient-name">
                      <span class="material-icons" onclick="mostrarsenhaNova();" style="position: absolute;margin-top:-30px;
                        right: 60px;cursor: pointer;">remove_red_eye</span>
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Confirmar Senha:</label>
                      <input type="password" id="confSenha" name="confSenha" class="form-control" id="recipient-name">
                      <span class="material-icons" onclick="mostrarsenhaConf();" style="position: absolute;margin-top:-30px;
                        right: 60px;cursor: pointer;">remove_red_eye</span>
                    </div>
                </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-dark">Atualizar</button>
                  </div>
                  </form>

                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
