<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grupo Lions</title>

		<!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script type="text/javascript" src="js/cep.js"></script>
		<script type="text/javascript" src="js/function.js"></script>
		<script type="text/javascript" src="js/function-delet.js"></script>

		<!-- Select -->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

	</head>

	<body>

		<!-- menu -->
		<div class="nav-side-menu">
		    <div class="brand mt-4 mb-4"> <img src="img/_grupo lions.png" width="200px"> </div>
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

		<!-- paginas -->
		<div class="main">
		    <div class="container">

                <div class="row">
		    		<div class="col">

						<form>
							<div class="form-group row">
								<label class="col-sm-9 col-form-label">Dashboard - Usuário Logado(NÃO ESQUECE DE TIRAR ESSE TEXTO): {{ Auth::user()->name }}</label>
                                <a href="{{ route ('logout') }}">LOGOFF</a>
							</div>
						</form>

						<hr />

		    		</div>
		    	</div>

			<div class="row mb-3">
                <div class="col-md-6">
                    <nav class="navbar navbar-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
                        </form>
                    </nav>
                </div>
			</div>

			<div class="table-overflow">

				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th class="" style="width: 1%"></th>
							<th class="" style="width: 30%">Nome/Razão Social</th>
							<th class="" style="width: 20%">Bairro</th>
							<th class="" style="width: 20%">Telefone</th>
							<th class="" style="width: 20%">Ações:</th>
							<th class="" style="width: 20%"></th>
						</tr>
					</thead>

					<tbody>

                    @foreach($clientes as $cliente)

						<tr>
							<td></td>
							<td> {{$cliente->name}} </td>
							<td> {{$cliente->district}} </td>
							<td> {{$cliente->tel}} </td>

							<td class="iconsColumn">

							    <a href="{{ route('dashboard/update/cliente', ['id' => $cliente->id]) }}" style="cursor:pointer;color:black;text-decoration:none">
									<i class="material-icons sidebar-icon" title="Editar">edit</i>
								</a>

								<a href="" target="_blanck" style="cursor:pointer;color:black;text-decoration:none">
									<i class="material-icons sidebar-icon" title="Recibo">insert_drive_file</i>
								</a>

								<a href="" target="_blanck" style="cursor:pointer;color:black;text-decoration:none;margin-right:-20px">
									<i class="material-icons sidebar-icon" title="Proposta de Serviço">descriptioni</i>
								</a>

								<a href="{{ route('cliente/delete', ['id' => $cliente->id]) }}" style="cursor:pointer;color:black;text-decoration:none" onClick="return confirm('Deseja mesmo apagar o cliente selecionado?')">
									<i class="material-icons sidebar-icon" title="Deletar">delete</i>
								</a>

							</td>

                            <td></td>
						</tr>
                    @endforeach


					</tbody>

				</table>

			</div>

		    </div>
		</div>

	</body>

</html>
