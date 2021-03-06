<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

        <script type="text/javascript" src="{{ asset('js/ShowPassword.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/validaPassword.js') }}"></script>

    </head>
    <body>

         <!-- menu -->
         <div class="nav-side-menu">
		    <div class="brand mt-4 mb-4"> <img src="{{ asset('img/grupo-lions.png') }}" width="200px"> </div>
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
                                        Usu??rio
                                </a>
                            </li>
		                </ul>

						<li>
		                    <a href="{{ route ('logout') }}">
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

                                <h4 class="mt-5">Add Usu??rio</h4>
                                <hr>
                                <form class="mt-4 mb-5" id="form_user" method="post" action="{{route ('user/create')}}">

                                    {{ csrf_field() }}


                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nome" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Lions@lions.com" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Administrador</label>
                                            <select name="administrator" class="form-control" required>
                                                <option></option>
                                                <option value="Sim">Sim</option>
                                                <option value="N??o">N??o</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="password" id="newPass" name="password" class="form-control" minlength="6" maxlength="8" placeholder="***********" required>
                                        <span class="material-icons" onclick="mostrarsenhaNova();" style="position: absolute;margin-top:-30px;
                                        right: 60px;cursor: pointer;">remove_red_eye</span>
                                    </div>

                                    <p id="validaPass"></p>


                                    <div class="form-group">
                                        <label>Confirmar Senha</label>
                                        <input type="password" id="confirmPassowrd" name="confirmPassowrd" class="form-control" minlength="6" maxlength="8" placeholder="***********" required>
                                        <span class="material-icons" onclick="mostrarsenhaConf();" style="position: absolute;margin-top:-30px;
                                            right: 60px;cursor: pointer;">remove_red_eye</span>
                                    </div>

                                    <p id="validarP"></p>

                                    <button type="submit"onclick="validaPass()"  class="btn btn-dark mt-4">Salvar</button>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </body>
</html>
