<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grupo Lions</title>

		<!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('img/leao-preto.png') }}" />

        <script type="text/javascript" src="{{ asset('js/mask.js') }}"></script>

		<!-- Select -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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

		<!-- paginas -->
		<div class="main">
		    <div class="container">

                <div class="row">
		    		<div class="col">

						<form>
							<div class="form-group row">
								<label class="col-sm-9 col-form-label">Dashboard - {{ Auth::user()->name }}</label>
                                <a href="{{ route ('logout') }}">LOGOFF</a>
							</div>
						</form>

						<hr />

		    		</div>
		    	</div>

			<div class="row mb-3">
                <div class="col-md-6" style="margin-right: -8rem;">
                    <nav class="navbar navbar-light">
                       <form class="form-inline" method="POST" action="{{ route ('search') }}">
                       {{ csrf_field() }}
                            <input class="form-control mr-sm-2" name="name" style="width:260px;" type="search" placeholder="Pesquisar Nome/Razão Social" aria-label="Pesquisar">
                            <button type="submit" class="btn btn-outline-dark my-2 my-sm-0">Pesquisar</button>
                        </form>
                    </nav>
                </div>

                <div class="col-md-6">
                    <nav class="navbar navbar-light">
                        <form class="form-inline" method="POST" action="{{ route ('search') }}">
                        {{ csrf_field() }}
                            <input class="form-control mr-sm-2" name="street" type="search" style="width:280px;" placeholder="Pesquisar Rua" aria-label="Pesquisar">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
                        </form>
                    </nav>
                </div>

            </div>

            <div class="row mb-3">
                <div class="col-md-6" style="margin-right: -8rem;">
                    <nav class="navbar navbar-light">
                        <form class="form-inline" method="POST" action="{{ route ('search') }}">
                        {{ csrf_field() }}
                            <input class="form-control mr-sm-2" name="district" type="search" style="width:260px;" placeholder="Pesquisar Bairro" aria-label="Pesquisar">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
                        </form>
                    </nav>
                </div>

                <div class="col-md-6">
                    <nav class="navbar navbar-light">
                        <form class="form-inline"method="POST" action="{{ route ('search') }}" >
                        {{ csrf_field() }}
                            <input class="form-control mr-sm-2" name="cpf_cnpj" type="search" style="width:280px;" placeholder="Pesquisar CPF/CNPJ" onkeypress="mascara(this, cpf)" aria-label="Pesquisar">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
                        </form>
                    </nav>
                </div>

                <div class="col-md-6">
                    <nav class="navbar navbar-light">
                        <a href="{{ route('cashier') }}" target="_blanck">
                            <button class="btn btn-dark my-2 my-sm-0" type="submit">PDF - Clientes</button>
                        </a>
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

								<a href="{{route('client/relation', ['id' => $cliente->id]) }}" target="_blanck" style="cursor:pointer;color:black;text-decoration:none">
									<i class="material-icons sidebar-icon" title="Recibo">insert_drive_file</i>
								</a>

								<a href="{{route ('cliente/proposta', ['id' => $cliente->id]) }}" target="_blanck" style="cursor:pointer;color:black;text-decoration:none;margin-right:-20px">
									<i class="material-icons sidebar-icon" title="Proposta de Serviço">descriptioni</i>
								</a>

                                @can('delet', $cliente)
								<a href="{{ route('cliente/delete', ['id' => $cliente->id]) }}" style="cursor:pointer;color:black;text-decoration:none;margin-left:-5px;" onClick="return confirm('Deseja mesmo apagar o cliente selecionado?')">
									<i class="material-icons sidebar-icon" title="Deletar">delete</i>
								</a>
                                @endcan

                                <a data-toggle="modal" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$cliente->id}}" style="cursor:pointer;color:black;text-decoration:none">
									<i class="material-icons sidebar-icon" title="Enviar por email">email</i>
								</a>

                                <a href="{{ route('whatsapp', ['id' => $cliente->id]) }}" target="_blanck" style="cursor:pointer;color:black;text-decoration:none">
									<i class="material-icons sidebar-icon" title="Enviar por email">share</i>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enviar por email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <a id="recibo" style="text-decoration:none">
                <button type="button" class="btn btn-primary">Recibo</button>
                </a>
                <a id="proposta" style="text-decoration:none">
                <button type="button" class="btn btn-dark" id="proposta">Proposta de Serviço</button>
                </a>
            </div>
            </div>
        </div>
        </div>

    <script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')

    var area = window.document.getElementById("recibo")
    area.addEventListener('click', clicar)
    function clicar(){
        var link = document.getElementById("recibo");
        var url = "{{ route('Mail', ['id' => ':id']) }}";
        url = url.replace(":id", recipient);
        link.setAttribute("href", url);
    }

    var prop = window.document.getElementById("proposta")
    prop.addEventListener('click', clickar)
    function clickar(){
        var link = document.getElementById("proposta");
        var url = "{{ route('Mail/propos', ['id' => ':id']) }}";
        url = url.replace(":id", recipient);
        link.setAttribute("href", url);
    }
    })
    </script>

	</body>

</html>
