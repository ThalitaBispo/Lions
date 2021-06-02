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

            <link rel="shortcut icon" href="{{ asset('img/leao-preto.png') }}" />

            <!-- script -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
                                        Usuário
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
                <div class="col">

                    <h3 class="mt-5" style="float:rigth">Usuários</h3>

                <div class="row" style="float: right">
                    <div class="col">
                        @can('notADM')
                        <a href="{{route('dashboard/create/user')}}" class="btn btn-success" type="button">Cadastrar</a></buton>
                        <a href="{{route('user/relation')}}" target="_blank" class="btn btn-primary" type="button">Relatório</a>
                        @endcan
                    </div>

                </div>

                <div style="margin-top:60px">
                    <div class="table-overflow">

                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="" style="width: 1%"></th>
                                    <th class="" style="width: 30%">Nome</th>
                                    <th class="" style="width: 20%">Email</th>
                                    <th style="width: 30%">Ações</th>
                                </tr>
                            </thead>

                            <tbody>


                                <!--COMEÇO DO SELECT-->
                                @foreach($registros as $registro)

                                <tr>
                                    <td>
                                        {{$registro->id}}
                                    </td>
                                    <td>
                                        {{$registro->name}}
                                    </td>

                                    <td>
                                        {{$registro->email}}
                                    </td>

                                    <td style="width: 40%">

                                    <a href="{{ route('user/find', ['id' => $registro->id]) }}" class="btn btn-primary btn-sm mb-1">Visualizar</a>

                                    @can('notADM', $registro)
                                    <a href="{{ route('dashboard/update/user', ['id' => $registro->id]) }}" class="btn btn-warning btn-sm mb-1">Editar</a>
                                    @endcan

                                    @if($registro->id !== Auth::user()->id)

                                    @can('notADM', $registro)
                                    <a href="{{ route('user/delete', ['id' => $registro->id]) }}" class="btn btn-danger btn-sm mb-1"onClick="return confirm('Deseja mesmo apagar o usuario selecionado?')">Excluir</a>
                                    @endcan

                                    @endif

                                    </td>
                                    </td>
                                </tr>

                                @endforeach



                            </tbody>
                        </table>

                    </div>
                </div>

                </div>
            </div>
        </div>

    </div>


    </body>
</html>
