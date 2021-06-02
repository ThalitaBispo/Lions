<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Download</title>

</head>
<body style="background-color:black">

<div class="container">

<div class="row">
    <div class="col-md-6">
        <img src="{{ asset('img/grupo-lions.png') }}"  style="width: 100% \9;" class="mt-5 mb-5 img-fluid">
    </div>
</div>

<div class="row">
    <div class="col-md-6 mt-5 ml-5">
        <a href="{{route('client/relation', ['id' => $download->id]) }}" download>
    <button type="submit" class="btn btn-primary" style="display: flex;align-items: center;Justify-content: center">Clique aqui para baixa</button>
        </a>
    </div>
</div>

</div>

</body>
</html>
