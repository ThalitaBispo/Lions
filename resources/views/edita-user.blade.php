<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Lions</title>

        <!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <link rel="shortcut icon" href="{{ asset ('img/leao-preto.png') }}" />

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

    <!-- menu -->
    <div class="nav-side-menu">
		    <div class="brand mt-4 mb-4"> <img src="{{ asset('img/_grupo lions.png') }}" width="200px"> </div>
		        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

		        <div class="menu-list">

		            <ul id="menu-content" class="menu-content collapse out">
		                <li>
		                  <a href="{{ route ('dashboard')}}">
                                <div class="row">
                                    <div class="col-md-2 iconNone">
                                        <i class="material-icons sidebar-icon">dashboard</i>
                                    </div>
                                    <div class="col-md-2" style="margin-top:-5px">
                                        Dashboard
                                    </div>
                                </div>
                          </a>
		                </li>

		                <li  data-toggle="collapse" data-target="#ajuda" class="collapsed">
		                    <a>
                                <div class="row">
                                    <div class="col-md-2 iconNone">
                                        <i class="material-icons sidebar-icon">group_add</i>
                                    </div>
                                    <div class="col-md-4" style="margin-top:-5px">
                                        Cadastro
                                    </div>
                                    <div class="col-md-6">
                                        <span class="arrow">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
		                </li>
		                <ul class="sub-menu collapse" id="ajuda">
		                    <li>
                                <a href="{{ route ('cliente') }}" id="cliente">
                                    <i class="fa fa-angle-right"></i>
                                        Cadastro cliente
                                </a>
                            </li>
                            <li>
                                <a href="{{ route ('user') }}" id="usuario">
                                    <i class="fa fa-angle-right"></i>
                                        Usuário
                                </a>
                            </li>
		                </ul>

						<li>
		                    <a href="index.php">
                                <div class="row">
                                    <div class="col-md-2 iconNone">
                                        <i class="material-icons sidebar-icon">exit_to_app</i>
                                    </div>
                                    <div class="col-md-2" style="margin-top:-5px">
                                        Sair
                                    </div>
                                </div>
                            </a>
		                </li>

		            </ul>
		     </div>
		</div>

    <div class="main">
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
                            <input type="password" id="password" name="password"class="form-control" minlength="6" maxlength="8" value="{{$registro->password}}" placeholder="***********">
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
    </div>
</body>
</html>
