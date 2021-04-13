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

		<script type="text/javascript" src="{{ asset('js/cep.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/mask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/validaCPFCNPJ.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/validaData.js') }}"></script>

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

                <h4 class="mt-5">Editar Cliente</h4>
                <hr>

                <form class="mt-4 mb-5" method="POST" action="{{ route ('cliente/update', ['id' => $clientes->id]) }}">

                {{ csrf_field() }}

                  <div class="form-group">
                    <label>Nome/Razão Social</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome/Razão Social" value="{{$clientes->name}}" required>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{$clientes->email}}" required>
                  </div>

                  <div class="form-group">
                    <label>CPF/CNPJ</label>
                    <input type="text" id="cpfCNPJ" name="cpf/cnpj" class="form-control" value="{{ $clientes->cpf_cnpj }}" minlength="11" maxlength="18" placeholder="00.000.000/0000-00" onkeypress="mascara(this, cpf)" onblur="validaCpfCnpj(cpfCNPJ.value);" required>
                  </div>

                  <p id="validar"></p>

                  <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="tel" class="form-control" value="{{$clientes->tel}}" minlength="11" maxlength="15" placeholder="(00) 00000-0000" onkeypress="mascara(this, telefone)" required>
                  </div>

                  <div class="form-group">
                    <label>Setor</label>
                    <input type="text" name="sector" class="form-control" value="{{$clientes->sector}}" placeholder="Setor">
                  </div>

                  <div class="form-group">
                    <label>CEP</label>
                    <input type="text" name="cep" class="form-control"  maxlength="10" value="{{$clientes->cep}}" id="cep" placeholder="00000-000" onkeyup='return event.charCode >= 48 && event.charCode <= 57' onkeypress="mascara(this, maskCep)" required>
                    <br>
                    <input type="button" value="Buscar" class="btn btn-dark" onclick="pesquisacep(cep.value);">
                  </div>

                  <p id="mostrar"></p>

                  <div class="form-group mt-2">
                    <label>Logradouro</label>
                    <input type="text" name="street" class="form-control" value="{{$clientes->street}}" id="rua" placeholder="Logradouro" required>
                  </div>

                  <div class="form-group row">
                    <div class="col">
                      <label>N°</label>
                      <input type="number" name="number" class="form-control" value="{{$clientes->number}}" placeholder="00000" required>
                    </div>

                    <div class="col">
                      <label>Qd.</label>
                      <input type="number" name="court" class="form-control" value="{{$clientes->court}}" placeholder="00000" required>
                    </div>

                    <div class="col">
                      <label>Lt.</label>
                      <input type="number" name="lot" class="form-control" value="{{$clientes->lot}}" placeholder="00000" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Bairro</label>
                    <input type="text" name="district" class="form-control" value="{{$clientes->district}}" id="bairro" placeholder="Bairro" required>
                  </div>

                  <div class="form-group">
                    <label>Cidade</label>
                    <input type="text" name="city" class="form-control" value="{{$clientes->city}}" id="cidade" placeholder="Cidade" required>
                  </div>

                  <div class="form-group">
                    <label>Estado</label>
                    <input type="text" name="state" class="form-control" value="{{$clientes->state}}" id="uf" placeholder="Estado" required>
                  </div>

                  <div class="form-group row">
                    <div class="col">
                      <label>Próxima data para pagamento</label>
                      <input type="text" id="data" name="date" class="form-control" value="{{ \Carbon\Carbon::parse($clientes->date)->format('d/m/Y') }}" maxlength="10" placeholder="00/00/0000" onkeypress="mascara(this, mdata)" onblur="validaData(data.value)" required>
                    </div>

                    <div class="col">
                      <label>Valor</label>
                      <input type="text" name="value" class="form-control" value="{{$clientes->value}}" placeholder="R$ 00,00" onkeypress="mascara(this, numberToReal)" required>
                    </div>
                  </div>

                  <p id="validaData"></p>

                  <div class="form-group">
                  <label>Vendedor</label>
                  <input type="text" name="seller" class="form-control" value="{{$clientes->seller}}" placeholder="Vendedor" required>
                </div>

                  <button type="submit" class="btn btn-dark mt-4">Salvar</button>

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
