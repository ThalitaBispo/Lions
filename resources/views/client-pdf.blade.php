<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo - Grupo Lions</title>

    <link rel="stylesheet" type="text/css" href="css/pdf.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

<div class="main">
    <div class="container">
        <div class="space">

            <div class="row">

            <p style="border: 1px solid black;height: 250px;width:658px;margin-left:0.75rem">

            @foreach($clients as $client)

                <div class="col-sm-4">
                    <img src="img/leao-preto.png" class="imgLion" alt="Lions" width="100">
                </div>

                <div class="col-xl-4">
                    <h2 class="nameComp">LIONS MONITORAMENTO</h2>
                </div>
                <div class="col-xl-4 borda">
                    <h6 class="nameRecibe">RECIBO</h6>
                </div>
                <div class="col-xl-4">
                    <h3 class="namePM">Patrimônio Monitorado</h3>
                </div>
                <div class="col-sm-4">
                    <h6 class="name62">(62)</h6>
                </div>
                <div class="col-xl-4">
                    <h4 class="nameNumber">99176-2204</h4>
                </div>
                <div class="col-sm-4">
                    <img src="img/whatsapp.png" class="imgWhats" alt="Whatsapp" width="20">
                </div>
                <div class="col-xl-4">
                    <p class="nameRUA">RUA LUCAS CARVALHO FILHO. Q19 LT15 CASA02 CRISTINA 2 CNPJ: 32.802.742/0001-27</p>
                </div>
                <div class="col-xl-4">
                    <p class="nameService"><strong>SERVIÇO DE MONITORAMENTO</strong></p>
                </div>
                <div class="col-xl-4">
                    <p class="nameVencimento"><strong>Vencimento: {{$client->date}}</strong></p>
                </div>
                <div class="col-xl-2">
                    <p class="nameValue"><strong>R${{$client->value}}</strong></p>
                </div>
                <div class="col-xl-2">
                    <p class="nameReceb"><strong>Recebemos de:</strong> {{$client->name}}</p>
                </div>

                <div class="col-xl-2">
                    <p class="borda1"> </p>
                </div>

                <div class="col-xl-2">
                    <p class="nameStreet"><strong>Logradouro:</strong> {{$client->street}}</p>
                </div>
                <div class="col-xl-2">
                    <p class="nameN">N°: {{$client->number}}</p>
                </div>
                <div class="col-xl-2">
                    <p class="nameQ">Qd.: {{$client->court}}</p>
                </div>
                <div class="col-xl-2">
                    <p class="nameL">Lt.: {{$client->lot}}</p>
                </div>

                <div class="col-xl-2">
                    <p class="borda2"> </p>
                </div>

                <div class="col-xl-2">
                    <p class="nameDistrict"><strong>Bairro:</strong> {{$client->district}}</p>
                </div>

                <div class="col-xl-2">
                    <p class="borda3"> </p>
                </div>

                <div class="col-xl-2">
                    <p class="nameTel"><strong>Telefone:</strong> {{$client->tel}}</p>
                </div>

                <div class="col-xl-2">
                    <p class="borda4"> </p>
                </div>

                <div class="col-xl-2">
                    <p class="nameC"><strong>Carlos Henrique</strong></p>
                </div>

                <div class="col-xl-2">
                    <p class="borda5"> </p>
                </div>

                <div class="col-xl-2">
                    <p class="nameResp">Responsável</p>
                </div>

                @endforeach

                </p>
            </div>

        </div>
    </div>
</div>

</body>

</html>
