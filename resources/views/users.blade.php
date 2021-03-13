<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <script type="text/javascript" src="js/script.js"></script>

    <div class="container">
        <div class="row">
            <div class="col">

                <h3 class="mt-5" style="float:rigth">Usuários</h3>

                <div class="row" style="float: right">
                    <div class="col">
                        <a href="{{route('dashboard/create/user')}}" class="btn btn-success" type="button">Cadastrar</a></buton>
                        <a href="{{route('user/relation')}}" target="_blank" class="btn btn-primary" type="button">Relatório</a>
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

                                    <a href="{{ route('dashboard/update/user', ['id' => $registro->id]) }}" class="btn btn-warning btn-sm mb-1">Editar</a>

                                    @if($registro->id !== Auth::user()->id)

                                    <a href="{{ route('user/delete', ['id' => $registro->id]) }}" class="btn btn-danger btn-sm mb-1"onClick="return confirm('Deseja mesmo apagar o usuario selecionado?')">Excluir</a>

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


</body>

</html>
