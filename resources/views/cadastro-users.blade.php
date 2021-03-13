<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="js/ShowPassword.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="container border mt-5">
                    <div class="row">
                        <div class="col">

                            <h4 class="mt-5">Add Usuário</h4>
                            <hr>

                            <form class="mt-4 mb-5" id="form_user" method="post" action="{{route ('user/create')}}">

                                {{ csrf_field() }}


                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nome">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Lions@lions.com">
                                </div>

                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" id="password" name="password" class="form-control" minlength="6" maxlength="8" placeholder="***********">
                                    <span class="material-icons" onclick="mostrarsenha();" style="position: absolute;margin-top:-30px;
                                    right: 60px;cursor: pointer;">remove_red_eye</span>
                                </div>


                                <div class="form-group">
                                    <label>Confirmar Senha</label>
                                    <input type="password" id="confirmPassowrd" name="confirmPassowrd" class="form-control" minlength="6" maxlength="8" placeholder="***********">
                                    <span class="material-icons" onclick="mostrarsenhaConf();" style="position: absolute;margin-top:-30px;
                                        right: 60px;cursor: pointer;">remove_red_eye</span>
                                </div>

                                <button type="submit" class="btn btn-dark mt-4">Salvar</button>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--jquery-1.10.2.min-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!--Bootstrap Js-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jrespond..min.js.html"></script>

</body>

</html>
